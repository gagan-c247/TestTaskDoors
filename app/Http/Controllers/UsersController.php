<?php

namespace App\Http\Controllers;

use Auth; 
use File;
use Hash;
use Input;
use Cache;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{User, Docs, Company, Product, Address};
use App\Jobs\{SendEmailLoginPasswordSend, SendEmailLoginVerifySend};
use App\Http\Requests\{UserRegistrationRequest, UserRegistrationUpdateRequest};

class UsersController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->email !== null || $request->name !== null){
            $user = User::with('company', 'company.address')->where('menuroles', 'user');
            if($request->name){
                $fullName = explode(' ', $request->name);

                if(count($fullName) == 2){
                    $users = $user->where('first_name', 'like', '%' . $fullName[0] . '%')
                                  ->orWhere('middle_name', 'like', '%' . $fullName[1] . '%')
                                  ->orWhere('last_name', 'like', '%' . $fullName[1] . '%');
                }else if(count($fullName) == 3){
                    $users = $user->where('first_name', 'like', '%' . $fullName[0] . '%')
                                  ->orWhere('middle_name', 'like', '%' . $fullName[1] . '%')
                                  ->orWhere('last_name', 'like', '%' . $fullName[2] . '%');
                }else{
                    $users = $user->where('first_name', 'like', '%' . $request->name . '%')
                                  ->orWhere('middle_name', 'like', '%' . $request->name . '%')
                                  ->orWhere('last_name', 'like', '%' . $request->name . '%');
                }

            }

            if($request->email){
                $users = $user->where('email', 'like', '%' . $request->email . '%');
            }
                
            $users = $users->orderBy('id', 'DESC')->paginate(50);
            return view('dashboard.admin.usersList', compact('users'));
        }else{
            $users = User::with('company', 'company.address')->where('menuroles', 'user')->orderBy('id', 'DESC')->paginate(50);
            return view('dashboard.admin.usersList', compact('users'));
        }
    }
    
    public function create(){
        $countries = [];
        $jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
        $data = json_decode($jsonString, true);

        foreach($data as $key => $value){
            $countries[] = $value['name'];
        }

        return view('dashboard.admin.userAdd', compact('countries'));
    }

    /* === GET STATE === */
    public function getState(Request $request){
        if($request->country != ''){
            $states = [];
            $jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
            $data = json_decode($jsonString, true);

            foreach($data as $key => $value){
                if($key == $request->country){
                    $states[] = $value['states'];
                }
            }
            return response()->json([ 'status'=>'success', 'states'=>$states ]);
        }
    }

    /* === GET CITY === */
    public function getCity(Request $request){
        if($request->state != '' && $request->country != ''){
            $cities = [];
            $jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
            $data = json_decode($jsonString, true);

            foreach($data as $key => $value){
                if($key == $request->country){
                    $cities[] = $value['states'][$request->state]['cities'];                 
                }
            }
            return response()->json([ 'status'=>'success', 'cities'=>$cities ]);
        }
    }

    public function store(UserRegistrationRequest $request){
        /* ========== User Table ========== */
        $user = new User;
        $user->first_name  = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name   = $request->last_name;
        $user->designation = $request->designation;
        $user->phone_nu    = $request->phone_nu;
        $user->email       = $request->email;
        $user->status      = 1;
        $user->password_status = 1;
        $user->password    = Hash::make($request->password);
        $user->save();

        $user->assignRole('user');

        /* ========== Send Email to User Default Account Activate Start ========== */
            $send_activate_email = [
                'first_name'  => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name'   => $request->last_name,
                'email'       => $request->email,
                'password'    => 'Password@123',
                'user_status' => 'activate',
            ];
        /* ========== Send Email to User Default Account Activate End ========== */

        /* ========== Send Email to User With Password Start ========== */
            $send_email = [
                'first_name'  => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name'   => $request->last_name,
                'email'       => $request->email,
            ];
        /* ========== Send Email to User With Password End ========== */

        /* ========== Company Table ========== */

        $company = [
            'name'        => $request->company_name,
            'year'        => $request->company_reg_year,
            'reg_nu'      => $request->company_reg_num,
            'phone_nu'    => $request->company_phone,
            'nu_machines' => $request->company_nu_molding_machines,
            'nu_sites'    => $request->companey_nu_sites,
            'business_owner_company_id' => 'resin-'.$user->id*7,
        ];
        $last_insert_company = $user->company()->create($company);

        /* === Doc/File Upload === */
        // if($files = $request->file('company_reg_doc')) {
        //     $destinationPath = public_path().'/docs';
        //     $company_reg_doc = date('Y-m-d-H-i-s') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $company_reg_doc);
        // }else{
        //     $company_reg_doc = "";
        // }

        /* ========== Docs Table ========== */
        // $docData = [
        //     'company_id' => $last_insert_company->id,
        //     'path' => $company_reg_doc,
        // ];
        // Docs::create($docData);

        /* ========== Address Table ========== */

        $jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
        $data = json_decode($jsonString, true);
        foreach($data as $key => $value){
            if($key == $request->company_address_country){
                $country = $value['name'];
                if($request->state > 0){
                    $state = $value['states'][$request->company_address_state]['name'];
                }else{
                    $state = "No State";
                }
            }
        }

        $add = [
            'line1'   => $request->company_address_line_1,
            'line2'   => $request->company_address_line_2,
            'state'   => $state,
            'city'    => $request->company_address_city,
            'country' => $country,
            'zip'     => $request->company_address_zip,
        ];
        $last_insert_company->address()->create($add);

        try{
            SendEmailLoginVerifySend::dispatch($send_email);
            SendEmailLoginPasswordSend::dispatch($send_activate_email);
        }catch (Throwable $e) {
            
        }

        $request->session()->flash('success', 'Business Owner profile has been registered successfully.');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user = User::find($id);
        if($user->id > 0){
            $company = Company::where('user_id', $user->id)->first();
            if($company != []){
                $address = Address::where('address_id', $company->id)->first();
            }
        } 
        return view('dashboard.admin.userShow', compact('user', 'company', 'address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        if($id > 0){
            $user = User::with('company', 'company.address')->find($id);

            $countries = [];
            $jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
            $data = json_decode($jsonString, true);

            foreach($data as $key => $value){
                $countries[] = $value['name'];
            }

            // if(isset($user->company->id)){
            //     $docfile = Docs::where('company_id', $user->company->id)->first();
            // }
            return view('dashboard.admin.userEditForm', compact('user', 'countries'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRegistrationUpdateRequest $request, $id){
    // public function update(Request $request, $id){
        /* ========== User Table ========== */
        $user = User::find($id);
        $user->first_name  = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name   = $request->last_name;
        $user->designation = $request->designation;
        $user->phone_nu    = $request->phone_nu;
        $user->email       = $user->email;
        $user->update();

        /* ========== Company Table ========== */
        $company = [
            'name'        => $request->company_name,
            'year'        => $request->company_reg_year,
            'reg_nu'      => $request->company_reg_num,
            'phone_nu'    => $request->company_phone,
            'nu_machines' => $request->company_nu_molding_machines,
            'nu_sites'    => $request->companey_nu_sites,
            'business_owner_company_id' => 'resin-'.$id*7,
        ];
        $last_update_company = $user->company()->update($company);

        // if($last_update_company){
        //     $company_id = Company::where('user_id', $user->id)->first();
        //     $docfile = Docs::where('company_id', $company_id->id)->first();

            /* === Doc/File Upload === */
            // if($request->file('company_reg_doc')) {
            //     $docPath = public_path().'/docs'.$docfile->path;
            //     if (File::exists($docPath)) {
            //         File::delete($docPath);
            //     }
            //     $files = $request->file('company_reg_doc');
            //     $destinationPath = public_path().'/docs';
            //     $company_reg_doc = date('Y-m-d-H-i-s') . "." . $files->getClientOriginalExtension();
            //     $files->move($destinationPath, $company_reg_doc);
            // }else{
            //     $company_reg_doc = $docfile->path;
            // }

            /* ========== Docs Table ========== */
            // $docData = [
            //     'company_id' => $company_id->id,
            //     'path' => $company_reg_doc,
            // ];
            // Docs::where('id', $docfile->id)->update($docData);
        // }

        /* ========== Address Table ========== */

        $jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
        $data = json_decode($jsonString, true);
        foreach($data as $key => $value){
            if($key == $request->company_address_country){
                $country = $value['name'];
                $state = $value['states'][$request->company_address_state]['name'];
            }
        }

        $add = [
            'line1'   => $request->company_address_line_1,
            'line2'   => $request->company_address_line_2,
            'state'   => $state,
            'city'    => $request->company_address_city,
            'country' => $country,
            'zip'     => $request->company_address_zip,
        ];
        $user->company->address()->update($add);
        
        if(Auth::guard('web')->check()){
            $request->session()->flash('success', 'Your profile has been updated successfully.');
            return redirect()->back();
        }   

        if(Auth::guard('admin')->check()){
            $request->session()->flash('success', 'Business owner profile updated successfully.');
            return redirect()->route('users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        if($id > 0){
            $user = User::find($id);
            if($user){
                $user->company->address()->delete();
                $user->company()->delete();
                $user->delete();
            }
            session()->flash('danger', 'Business Owner profile has been deleted successfully.');
            return redirect()->route('users.index');
        }
    }

    public function status($id){
        $userStatus =  User::find($id)->status;
        $data = User::where('id', $id)->first();
        if($userStatus == '1'){
            User::where('id', $id)->update(['status' => '0']);
            $userStatus =  User::find($id)->status;

            /* ========== Send Email to User With Password Start ========== */
                $send_email = [
                    'first_name'  => $data->first_name,
                    'middle_name' => $data->middle_name,
                    'last_name'   => $data->last_name,
                    'email'       => $data->email,
                    'password'    => 'Password@123',
                    'user_status' => 'deactivate',
                ];
                SendEmailLoginPasswordSend::dispatch($send_email);
            /* ========== Send Email to User With Password End ========== */

            return response()->json(['status'=>'success','message'=>'User Rejected','type'=>'deactivate']);
        }else{
            User::where('id', $id)->update(['status' => '1']);

            /* ========== Send Email to User With Password Start ========== */
                $send_email = [
                    'first_name'  => $data->first_name,
                    'middle_name' => $data->middle_name,
                    'last_name'   => $data->last_name,
                    'email'       => $data->email,
                    'password'    => 'Password@123',
                    'user_status' => 'activate',
                ];
                SendEmailLoginPasswordSend::dispatch($send_email);
            /* ========== Send Email to User With Password End ========== */

            return response()->json(['status'=>'success','message'=>'User Approved','type'=>'activate']);
        }
    }

    /* ===== Proxy Login ===== */
    public function proxyLogin($id){
        if(Auth::guard('web')->check()){
            Auth::guard('web')->logout();
        }
        Auth::guard('web')->loginUsingId($id);
        return redirect('/dashboard');
    }

    /* ===== User Search ===== */
    // public function userSearch(Request $request){
    //     if($request->user_search != ''){
    //         $users = User::where('first_name', 'LIKE', "%{$request->user_search}%")->orWhere('email', 'LIKE', "%{$request->user_search}%")->paginate(10);
    //         $you = auth()->user();
    //         return view('dashboard.admin.usersList', compact('users', 'you'));
    //     }
    // }
}
