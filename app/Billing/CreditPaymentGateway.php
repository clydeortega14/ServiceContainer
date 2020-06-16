<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentContract
{
	private $currency;

	public function __construct($currency)
	{
		$this->currency = $currency;
		$this->discount = 0;
	}

	public function charge($amount)
	{
		$fees = $amount * 0.02;

		return [

			'amount' => ($amount - $this->discount) + $fees,
			'confirm_number' => Str::random(),
			'currency' => $this->currency,
			'discount' => $this->discount,
			'fees' => $fees
		];
	}
	public function setDiscount($amount)
	{
		return $this->discount = $amount;
	}
}