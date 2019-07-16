<?php

namespace Safe2Pay\Models;

class SingleSalePaymentMethod
{
    private $IdSingleSale;

    public function getIdSingleSale(){
		return $this->IdSingleSale;
	}

	public function setIdSingleSale($IdSingleSale){
		$this->IdSingleSale = $IdSingleSale;
	}
}

?>