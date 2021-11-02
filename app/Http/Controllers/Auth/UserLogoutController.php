<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class UserLogoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }

    public function userLogout(){
        Auth::logout();
        if(Auth::guard('admin')->check()){
            return redirect('/admin/dashboard');
        }
        return redirect('/login');
    }
}
