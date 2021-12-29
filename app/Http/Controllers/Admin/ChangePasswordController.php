<?php

namespace App\Http\Controllers\admin;

use Auth;
use Hash;
use App\Models\{Admin,User};
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
        $user = Admin::find(auth::id());
        $check = Hash::check($request->old_password, $user->password);
        if($check){
            $user->password = Hash::make($request->password);
            $user->update();
            $request->session()->flash('success', 'Admin Password Changed Successfully.');
            return redirect()->route('change-password.index');
        }else{
            $request->session()->flash('danger', 'Old Password does not match.');
            return redirect()->route('change-password.index'); 
        }
    }
}
