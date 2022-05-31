<?php

/* ============================== PUBLIC ROUTE ============================== */
Route::get('/', function () {
    return redirect('/admin'); 
});

    Route::resource('/product','Frontend\ProductController');
    /* ============================== FRONTEND ROUTE ============================== */
    Route::get('/login', function () { return view('auth.login'); });
    Auth::routes();

/* ============================== FRONTEND ROUTE ============================== */
Route::get('/login', function () { return view('auth.login'); });
Auth::routes();

/* ============================== ADMIN LOGIN/LOGOUT ROUTE ============================== */
Route::get('/admin/login','Auth\AdminController@getLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminController@login')->name('admin.login.submit');
Route::get('admin/logout','Auth\AdminController@logout')->name('admin.logout');

/* ============================== USER LOGOUT ROUTE ============================== */
Route::get('/logout','Auth\UserLogoutController@userLogout')->name('user.logout');

<<<<<<< HEAD
/* ============================== CHECK ADMIN ROUTE ============================== */
Route::get('/admin',function(){
    if(Auth::guard('admin')->check()){
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('admin.login');
});
=======
        /* ========== CHANGE PASSWORD ========== */
        Route::resource('/change-password',  'Admin\ChangePasswordController');
>>>>>>> 7703475f429566f9667b6759b7b72b4cf909b0dc

/* ========== USER MANAGEMENT ROUTE ========== */
Route::get('/status/{id}', 'UsersController@status');
Route::resource('/users','UsersController');

/* ============================== ADMIN  ROUTE ============================== */ 
Route::prefix('admin')->middleware('auth:admin')->group(function(){
    /* ========== DASHBOARD ========== */
    Route::get('/dashboard','DashboardController@adminDashboard')->name('admin.dashboard');
    
    /* ========== USER MANAGEMENT ROUTE ========== */
    Route::get('/status/{id}', 'UsersController@status');
    Route::resource('/users','UsersController');

    /* ========== CHANGE PASSWORD ========== */
    Route::resource('/change-password',  'admin\ChangePasswordController');

    /* =========== Role Permission =============*/
    Route::resource('/role','Admin\RolePermissionController');
     
    /* =========== Attribute Management =============*/
    Route::resource('/attribute','Admin\AttributeController');

    /* =========== Configurator Management =============*/
    Route::resource('/configurator','Admin\ConfiguratorController');
});

/* ============================== USER ROUTE ============================== */
Route::group(['middleware'=>'auth'],function(){
    /* ========== DASHBOARD ========== */
    Route::get('/dashboard','DashboardController@userDashboard')->name('user.dashboard');

    /* ========== USER MANAGEMENT ONLY FOR PROFILR EDIT ROUTE ========== */
    Route::get('/profile','User\ProfileController@profile');
    Route::post('/profile/{id}','User\ProfileController@profileUpdate');

    /* ========== USER CHANGE PASSWORD ROUTE ========== */   
    Route::get('/change-password','User\ProfileController@changePassword')->name('user.changePassword');
    Route::post('/change-password','User\ProfileController@passwordUpdate')->name('user.passwordUpdate');
});