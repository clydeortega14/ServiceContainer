<?php

namespace App\Billing;

interface PaymentContract {

	public function charge($amount);

	public function setDiscount($amount);
}