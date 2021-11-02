<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\Company;
use App\Models\Docs;
use App\Models\Address;
Use Redirect;
use Input;
use App\Jobs\SendEmailLoginVerifySend;
use File;

class RegisterController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/thank-you';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data){
    //     return Validator::make($data,
    //     );
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data){
        /* ========== User Table ========== */
        $user = new User;
        $user->first_name  = $data['first_name'];
        $user->middle_name = $data['middle_name'];
        $user->last_name   = $data['last_name'];
        $user->designation = $data['designation'];
        $user->phone_nu    = $data['phone_nu'];
        $user->email       = $data['email'];
        $user->password    = Hash::make($data['password']);
        $user->save();

        $user->assignRole('user');

        /* ========== Send Email to User With Password Start ========== */
            $send_email = [
                'first_name'  => $data['first_name'],
                'middle_name' => $data['middle_name'],
                'last_name'   => $data['last_name'],
                'email'       => $data['email'],
            ];
        /* ========== Send Email to User With Password End ========== */

        /* ========== Company Table ========== */

        $company = [
            'name'        => $data['company_name'],
            'year'        => $data['company_reg_year'],
            'reg_nu'      => $data['company_reg_num'],
            'phone_nu'    => $data['company_phone'],
            'nu_machines' => $data['company_nu_molding_machines'],
            'nu_sites'    => $data['companey_nu_sites'],
            'business_owner_company_id' => 'resin-'.$user->id*7,
        ];
        $last_insert_company = $user->company()->create($company);

        /* === Doc/File Upload === */
        // if($files = $data['company_reg_doc']) {
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
        $allData = json_decode($jsonString, true);
        foreach($allData as $key => $value){
            if($key == $data['company_address_country']){
                $country = $value['name'];
                $state = $value['states'][$data['company_address_state']]['name'];
            }
        }
        
        $add = [
            'line1'   => $data['company_address_line_1'],
            'line2'   => $data['company_address_line_2'],
            'state'   => $state,
            'city'    => $data['company_address_city'],
            'country' => $country,
            'zip'     => $data['company_address_zip'],
        ];
        $last_insert_company->address()->create($add);
        
        try{
            SendEmailLoginVerifySend::dispatch($send_email);
        }catch (Throwable $e) {
            
        }
        return $user;
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

    public function register(UserRegistrationRequest $request){
        // event(new Registered($user = $this->create($request->all())));
        $user = $this->create($request->all());
        if ($response = $this->registered($request, $user)) {
            return $response;
        }
        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

}
