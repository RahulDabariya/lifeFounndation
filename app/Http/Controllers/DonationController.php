<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class DonationController extends Controller
{

    public function processPayment(Request $request)
    {
        $input = $request->all();

        // Validate the input and process the payment using Razorpay API

        $api = new Api('rzp_test_QTj9H062IXXEJi', 'YdsUKOdQmcGm0ZsxQJZxEuCV'); 

        $payment = $api->payment->create([
            'amount' => $input['razorpayAmount'],
            'currency' => 'INR', // Change currency as per your requirement
            'receipt' => 'receipt_' . time(),
            // Add additional payment parameters as needed
        ]);

        // Return the payment response or handle it as per your requirements
        return response()->json($payment);
    }
}
