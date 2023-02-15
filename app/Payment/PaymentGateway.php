<?php

declare(strict_types=1);

namespace App\Payment;

enum PaymentGateway: string
{
    case Stripe = 'stripe';
    case Checkout = 'checkout';
}
