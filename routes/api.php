<?php

use Illuminate\Http\Request;
use App\Account;
use App\userprofiles;
use App\Loan;
use App\Transaction;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// for accounts
Route::get('accounts', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Accounts::all();
});

Route::get('accounts/{id}', function($id) {
    return Accounts::find($id);
});


// for userprofiles
Route::get('accounts/profiles/{id}', function($id) {
    return userprofiles::find($id);
});

Route::post('accounts/profiles', function(Request $request) {
    return userprofiles::create($request->all);
});

// for loans
Route::get('accounts/loans', function() {
    return Loan::all();
});

Route::delete('accounts/payments/{id}', function($id) {
    Payment::find($id)->delete();

    return 204;
});

Route::get('accounts/transactions', function() {
    return Transaction::all();
});

Route::get('accounts/transactions/{id}', function($id) {
    return Transaction::find($id);
});