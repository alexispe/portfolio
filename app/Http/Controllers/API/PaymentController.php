<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Payment\PaymentGateway;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    public function prepare(string $gateway) {
        $gateway = PaymentGateway::from($gateway);

        if ($gateway === PaymentGateway::Stripe) {
            $stripe = new StripeClient(
                config('payment.stripe.secret_key')
            );
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' => 1000,
                'currency' => 'eur',
                'payment_method_types' => ['card'],
            ]);
            return response()->json([
                'client_secret' => $paymentIntent->client_secret,
            ]);
        } else if ($gateway === PaymentGateway::Checkout) {
            // ...
        }
    }
}
