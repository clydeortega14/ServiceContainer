<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentContract
{
	private $currency;

	public function __construct($currency)
	{
		$this->currency = $currency;
		$this->discount = 0;
	}

	public function charge($amount)
	{

		return [

			'amount' => $amount - $this->discount,
			'confirm_number' => Str::random(),
			'currency' => $this->currency,
			'discount' => $this->discount
		];
	}
	public function setDiscount($amount)
	{

		return $this->discount = $amount;
	}
}