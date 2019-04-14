<?php

trait Insurance {
	
	public $monthly_fee;

	public function calculateMonthlyFee($age) {		
		if($this->name) {		
			return $age * strlen($this->name);			
		}

	}
}