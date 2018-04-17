<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\userprofiles;

class userprofileController extends Controller
{
     public function userprofile()
    {
        return view('accounts/profiles/accountHolderProfile');
    }

    // public function storeuserprofile(Request $request){
    // 	$user = new userprofile;
    // 	$user -> holderName = Input::get('holderName');
    // 	$user -> ICnumber = Input::get('ICnumber');
    // 	$user -> mailAddress = Input::get('mailAddress');
    // 	$user -> accountNumber = Input::get('accountNumber');
    // 	$user -> cardNumber = Input::get('cardNumber');

    // 	$user -> save();

    // 	return redirect('userprofile');


    // }

    public function updateuserprofile(Request $request, $id){

    }

    public function showprofile($id){
        return userprofiles::find($id);
    }

    public function storeuserprofile(Request $request){
        // return userprofiles::create($request->all());

        $userprofiles = userprofiles::create($request->all());

        return response()->json($userprofiles, 201);

    }


}
