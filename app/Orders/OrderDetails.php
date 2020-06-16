<?php

namespace App\Orders;

use App\Billing\PaymentContract;

class OrderDetails
{
	/*
	 * == VARIABLES ==
	 * What variables to this class need
	*/
	private $paymentgateway;

	/*
     * == SETTER ==
     * What do this class need
	*/

	public function __construct(PaymentContract $paymentgateway){

		$this->PaymentGateway = $paymentgateway;
	}
	
	public function allOrders()
	{

		$this->PaymentGateway->setDiscount(100);

		return [

			'OrderName' => 'Pizza Lazana',
			'Address' => '44 Kahoy Street, San Roque Talisay City, Cebu'
		];
	}
}