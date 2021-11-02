<?php

    /* ============================== PUBLIC ROUTE ============================== */
    Route::get('/', function () {
        return redirect('/home');
    });

    /* ============================== FRONTEND ROUTE ============================== */
    Route::get('/home', function () { return view('frontend.index'); })->name('home');
    Route::get('/how-to', 'Frontend\PageController@howto');
    Route::get('/about-us', 'Frontend\PageController@aboutus');
    Route::get('/contact-us','Frontend\ContactusController@index');
    Route::post('/contact-us','Frontend\ContactusController@store');
    Route::get('/faq','Frontend\PageController@faqsList');
    Route::get('/terms-of-use',  'Frontend\PageController@termOfUse');
    Route::get('/privacy-policy', 'Frontend\PageController@privacyPolicy');
    Route::get('/return-policy', 'Frontend\PageController@returnPolicy');
    Route::get('/shipping-policy','Frontend\PageController@shippingPolicy');
    Route::get('/how-it-works', 'Frontend\PageController@howItWorks');
    Route::get('/search', function () { return view('frontend.search'); });
    Route::get('/thank-you', function () { return view('thankyou'); });
    Route::get('/products', 'Frontend\ProductController@productList')->name('products');
    Route::get('/product-detail/{slug}', 'Frontend\ProductController@productDetail');
    Route::get('/product/chat/{slug}', 'Frontend\ProductController@chat')->name('chat');

    /* === FOR NOW WE USE THIS ROUTE BUT AFTER PAYMENT THIS IS CHANGE === */
    Route::get('/contract/{id}','Frontend\ContractController@addContract')->name('contract.addContract');
    Route::get('/checkout/{id}','Frontend\ContractController@checkoutSessionId')->name('checkout-session');
    Route::get('/checkout','Frontend\ContractController@checkout')->name('checkout');
    Route::get('/contract-status/{id}/{status}','Frontend\ContractController@contractStatus');

    /* =========== State Routes Register =============*/
    Route::post('/reg-get-state','Auth\RegisterController@getState');
    Route::post('/reg-get-city','Auth\RegisterController@getCity');

    Auth::routes();

    /* ============================== ADMIN LOGIN/LOGOUT ROUTE ============================== */
    Route::get('/admin/login','Auth\AdminController@getLoginForm')->name('admin.login');
    Route::post('/admin/login','Auth\AdminController@login')->name('admin.login.submit');
    Route::get('admin/logout','Auth\AdminController@logout')->name('admin.logout');
    
    /* ============================== USER LOGOUT ROUTE ============================== */
    // Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
    Route::get('/logout','Auth\UserLogoutController@userLogout')->name('user.logout');

    /* ============================== CHECK ADMIN ROUTE ============================== */
    Route::get('/admin',function(){
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    });

    /* ============================== ADMIN  ROUTE ============================== */
    Route::prefix('admin')->middleware('auth:admin')->group(function(){
        /* ========== DASHBOARD ========== */
        Route::get('/dashboard','DashboardController@adminDashboard')->name('admin.dashboard');
        
        /* ========== USER MANAGEMENT ROUTE ========== */
        Route::resource('/users','UsersController');
        Route::get('/status/{id}', 'UsersController@status');
        Route::get('/user/user-search', 'UsersController@userSearch');
        
        /* =========== State Routes Admin =============*/
        Route::post('/admin-get-state','UsersController@getState');
        Route::post('/admin-get-city','UsersController@getCity');
    });
    
    /* ============================== PROXY LOGIN ROUTE ============================== */
    Route::group(['middleware'=>'auth:admin'],function(){
        Route::get('/proxy_login/{id}', 'UsersController@proxyLogin');
    });
    
    /* ============================== USER ROUTE ============================== */
    Route::group(['middleware'=>'auth'],function(){
        /* ========== USER FIRST LOGIN AND CHANGE THEIR PASSWORD ========== */
        Route::resource('user-login-change-password',  'admin\UserLoginChangePasswordController');

        /* ========== DASHBOARD ========== */
        Route::get('/dashboard','DashboardController@userDashboard')->name('user.dashboard');
        
        /* ========== USER MANAGEMENT ONLY FOR PROFILR EDIT ROUTE ========== */
        // Route::get('/profile','User\ProfileController@profile');
        // Route::post('/profile/{id}','User\ProfileController@profileUpdate');

        /* ========== PRODUCT MANAGEMENT ROUTE ========== */
        // Route::resource('product', 'User\ProductController');
        // Route::get('/product/status/{id}', 'User\ProductController@status');
        // Route::get('/product/product-clone/{id}', 'User\ProductController@productClone');
        
        /* ========== USER CHANGE PASSWORD ROUTE ========== */   
        // Route::get('/change-password','User\ProfileController@changePassword')->name('user.changePassword');
        // Route::post('/change-password','User\ProfileController@passwordUpdate')->name('user.passwordUpdate');
        
        /* ========== MESSAGE CENTER ROUTE ========== */
        // Route::resource('/message-center','User\MessageCenterController');
        
        // Route::get('/message-centers','User\MessageCenterController@index');
        // Route::get('/message-center/create/{slug}','User\MessageCenterController@create')->name('message-center.create');
        // Route::post('/message-center/store','User\MessageCenterController@storedata')->name('message-center.store');
        // Route::post('/read-status','User\MessageCenterController@readStatus');

        /* ========== PAYMENT MANAGEMENT ROUTE ========== */
        // Route::resource('/card', 'admin\CardsController');
        // route::get('/account-create','admin\CardsController@accountCreate');
        // route::get('/bank-account-link','admin\CardsController@bankAccountLink');

        /* ========== BANK INFORMATION ROUTE =========== */
        // Route::get('/bank-information','User\BankAccountController@index')->name('bank-info.index');
        // Route::get('/bank-information/create','User\BankAccountController@create')->name('bank-info.create');
        // Route::post('/bank-information','User\BankAccountController@store')->name('bank-info.store');

        // Route::get('/buyer', 'Frontend\ContractController@buyerList');
        // Route::get('/buyer-details/{id}', 'Frontend\ContractController@buyerDetails');
        // Route::get('/seller', 'Frontend\ContractController@sellerList');
        // Route::get('/seller-details/{id}', 'Frontend\ContractController@sellerDetails');
        // Route::get('/raise-dispute/{id}', 'Frontend\ContractController@raiseDispute')->name('raise-dispute');
        /* =========== Review Routes =============*/
        Route::get('/review/{slug}','User\ReviewController@index')->name('review.index');
        Route::post('/review','User\ReviewController@store')->name('review.store');

        /* =========== State Routes User =============*/
        Route::post('/get-state','User\ProductController@getState');
        Route::post('/get-city','User\ProductController@getCity');

        /* =========== Transaction Management =============*/
        Route::resource('transactions', 'User\TransactionController');
        Route::get('export-transaction', 'User\TransactionController@exportTransaction')->name('export-transaction');

        //only for demo
        Route::get('/transaction','User\TransactionController@transaction')->name('user.transaction');
        Route::get('/transaction-details','User\TransactionController@transactionDetails')->name('user.transactionDetails');
        Route::get('/payout','User\TransactionController@payout')->name('user.payout');
        Route::get('/payout-to-bank','User\TransactionController@payoutToBank')->name('user.payoutToBank');
        Route::get('my-transaction','User\TransactionController@transactionAsCustomer')->name('user.transactionAsCustomer');
    });
