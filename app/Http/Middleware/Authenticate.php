<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request){
        //$request->expectsJson()
        if (auth()->guard('admin')->check()) {
            return route('admin.dashboard');
        }
        if (auth()->guard('web')->check()) {
            return route('user.dashboard');
        }
        // return route('login');
        return route('home');
        // return redirect('/home');

    }
}
