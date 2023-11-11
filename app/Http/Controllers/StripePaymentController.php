<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
    	$price = $request->price;
        return view("stripe",compact('price'));
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $request->price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Affiliate Marketing" 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}

