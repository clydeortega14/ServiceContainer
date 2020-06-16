<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentContract;
use App\Orders\OrderDetails;

class PaymentGatewayController extends Controller
{
	public function store(OrderDetails $orderdetails, PaymentContract $paymentgateway){


		dump($paymentgateway->charge(13453.00));
		
		dd($orderdetails->allOrders());
	}

	public function storeSession(Request $request)
	{

		$userdata = [

			$request->input('username'),
			$request->input('password')

		];

		dd($request->session()->get('userdata', $userdata));
	}
}
