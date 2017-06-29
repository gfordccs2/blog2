<?php
namespace App\Billing;

class Stripe
	{
		protected $key;
		Public function __contruct($key)
		{
			$this->key = $key;
		}
	}