<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;


class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
   
   
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 200,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);
   
        // Session::flash('success', 'Payment successful!');
           
        return back()->with([
            'success' => 'Payment successful!'
        ]);
    }
}
