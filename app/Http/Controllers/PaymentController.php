<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function deletePayment(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return 204;
    }
}
