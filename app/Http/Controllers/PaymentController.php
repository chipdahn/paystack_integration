<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('pay');
    }

    public function redirectToGateway(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
        ]);

        $paymentData = [
            'email' => $request->email,
            'amount' => $request->amount * 100,
        ];
        return Paystack::getAuthorizationUrl($paymentData)->redirectNow();
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        if ($paymentDetails['data']['status'] === 'success') {
            return view('success', ['paymentDetails' => $paymentDetails]);
        }

        return redirect()->back()->with('error', 'Payment failed. Please try again.');
    }
}
