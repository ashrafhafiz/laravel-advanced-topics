<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;
    private $fees;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
        $this->fees = 0;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function setFees($fees)
    {
        $this->fees = $fees;
    }

    public function charge($amount)
    {

        return [
            'amount' => $amount - $this->discount + $this->fees,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $this->fees,
        ];
    }
}
