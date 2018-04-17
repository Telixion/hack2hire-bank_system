<?php

namespace App\Http\Controllers;

use App\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
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
