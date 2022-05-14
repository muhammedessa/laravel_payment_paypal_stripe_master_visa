<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Session;
use Stripe;
use Stripe\Stripe as StripeStripe;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            'amount' => 100*100,
            'currency'=>"usd",
            'source'=> $request->stripeToken,
            'description' =>'Test payment from muhammed essa'
        ]);

        Session::flash('success','Payment has been successfully');
        return back();
    }


}
