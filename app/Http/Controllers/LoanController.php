<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Loan;

class LoanController extends Controller
{
    public function getLoanAccounts()
    {
        return Loan::all();
    }
}
