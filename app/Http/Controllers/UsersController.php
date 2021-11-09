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
use App\Models\User;
use App\Http\Requests\{UserRegistrationRequest, UserRegistrationUpdateRequest};

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:user-section');
        $this->middleware('permission:user-index', ['only'=>['index']]);   
        $this->middleware('permission:user-create', ['only'=>['create','store']]);
        $this->middleware('permission:user-edit', ['only'=>['edit', 'update']]);
        $this->middleware('permission:user-destroy', ['only'=>['destory']]);
        $this->middleware('permission:user-proxy', ['only'=>['proxyLogin']]);
    }

  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->email !== null || $request->name !== null){
            $user = User::where('menuroles', 'user');

            if($request->name){
                $users = $user->where('name', 'like', '%' . $request->name . '%');
            }

            if($request->email){
                $users = $user->where('email', 'like', '%' . $request->email . '%');
            }
                
            $users = $users->orderBy('id', 'DESC')->paginate(20);
            return view('dashboard.admin.usersList', compact('users'));
        }else{
            $users = User::where('menuroles', 'user')->orderBy('id', 'DESC')->paginate(20);
            return view('dashboard.admin.usersList', compact('users'));
        }
    }
    
    public function create(){
        return view('dashboard.admin.userAdd');
    }

    public function store(UserRegistrationRequest $request){
        /* ========== User Table ========== */
        $user = new User;
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->status = 1;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole('user');

        $request->session()->flash('success', 'User has been registered successfully.');
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
        return view('dashboard.admin.userShow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        if($id > 0){
            $user = User::find($id);
            return view('dashboard.admin.userEditForm', compact('user'));
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
        /* ========== User Table ========== */
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        if(Auth::guard('web')->check()){
            $request->session()->flash('success', 'Your profile has been updated successfully.');
            return redirect()->back();
        }   

        if(Auth::guard('admin')->check()){
            $request->session()->flash('success', 'User profile updated successfully.');
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
                $user->delete();
            }
            session()->flash('danger', 'User profile has been deleted successfully.');
            return redirect()->route('users.index');
        }
    }

    public function status($id){
        $userStatus =  User::find($id)->status;
        $data = User::where('id', $id)->first();
        if($userStatus == '1'){
            User::where('id', $id)->update(['status' => '0']);
            $userStatus =  User::find($id)->status;
            return response()->json(['status'=>'success','message'=>'User Rejected','type'=>'deactivate']);
        }else{
            User::where('id', $id)->update(['status' => '1']);

            return response()->json(['status'=>'success','message'=>'User Approved','type'=>'activate']);
        }
    }
}
