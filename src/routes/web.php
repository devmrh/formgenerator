<?php
    // MyVendor\contactform\src\routes\web.php
    // Route::get('contact', function(){
    //     return view('formgenerator::contact');
    // });


    // Route::post('contact', function(){

    // })->name('contact');

    Route::group(['namespace' => 'devmrh\formgenerator\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactController@index');
        //Route::post('contact', 'ContactController@sendMail')->name('contact');
    });


?>