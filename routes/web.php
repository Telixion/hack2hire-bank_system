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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usermanagement', function () {
    return view('usermanagement');
});
Route::get('/monitoringscreen', function () {
    return view('monitoringscreen');
});

Route::get('accounts', 'AccountController@index');
Route::get('accounts/{id}', 'AccountController@show');

// for profiles
Route::get('accounts/profile/{id}', 'userprofileController@showprofile');
// Route::post('accounts/profile', 'userprofileController@storeuserprofile');
// Route::post('accounts/profile', ['middleware' => 'csrf', 'uses' => 'userprofileController@storeuserprofile']);

// Route::group('middleware' => 'csrf'), function(){
//     
// });

// for loans
Route::get('accounts/loans', 'LoanController@getLoanAccounts');

// for payment
Route::delete('accounts/payments/{id}', 'PaymentController@deletePayment');

// for transactions 
Route::get('accounts/transactions', 'AccountController@index');
Route::get('accounts/transactions/{id}', 'AccountController@show');