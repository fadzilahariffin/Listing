<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    // USERS ==================================================
    Route::resource('user', 'UserController')->names([
        'index'     =>  'user.index',
        'create'    =>  'user.create',
        'store'     =>  'user.store',
        'show'      =>  'user.show',
        'edit'      =>  'user.edit',
        'update'    =>  'user.update',
        'destroy'   =>  'user.destroy',
    ]);
    // END USERS ==============================================

    // USERS ==================================================
    Route::resource('listing', 'ListingController')->names([
        'index'     =>  'listing.index',
        'create'    =>  'listing.create',
        'store'     =>  'listing.store',
        'show'      =>  'listing.show',
        'edit'      =>  'listing.edit',
        'update'    =>  'listing.update',
        'destroy'   =>  'listing.destroy',
    ]);
    // END USERS ==============================================

});


Auth::routes();