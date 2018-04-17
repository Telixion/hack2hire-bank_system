<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

class AccountController extends Controller
{
    public function index()
    {
        return Account::all();
    }

    public function show($id)
    {
        return Account::find($id);
    }
}
