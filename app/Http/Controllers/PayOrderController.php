<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use Illuminate\Http\Request;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    // public function store()
    // {
    //     $paymentGateway = new PaymentGateway();
    //     dd($paymentGateway->charge(2500));
    // }

    public function store(OrderDetails $oderDetails, PaymentGatewayContract $paymentGateway)
    {
        $order = $oderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
