<?php

namespace App\Http\Controllers\admin;

use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.admin.change-password.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'old_password' => 'required|string|min:8',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $adminPassword =  User::find(auth::id())->password;
        $check = Hash::check($request->old_password, $adminPassword);

        if($check){
            $user = User::find(auth::id());
            $user->password = Hash::make($request->password);
            $user->update();

            $request->session()->flash('success', 'Admin Password Changed Successfully.');
            return redirect()->route('change-password.index');
        }else{
            $request->session()->flash('danger', 'Old Password does not match.');
            return redirect()->route('change-password.index'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
    }
}
