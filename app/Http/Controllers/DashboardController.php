<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller{
    
    public function adminDashboard(){
        $users = User::get();
        $businessOwners = $users->where('menuroles', 'user')->count();
        $businessOwnersActive = $users->where('menuroles', 'user')->where('status', '1')->count();
        return view('dashboard.homepage', compact('businessOwners', 'businessOwnersActive'));  
    }

    public function userDashboard(){
        return view('dashboard.homepage');
    }
}
