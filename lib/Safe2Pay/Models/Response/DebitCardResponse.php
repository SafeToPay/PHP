<?php

namespace Safe2Pay\Models;


class DebitCardResponse
{
    private $CardNumber;
    private $Brand;

    public function getCardNumber(){
		return $this->CardNumber;
	}

	public function setCardNumber($CardNumber){
		$this->CardNumber = $CardNumber;
	}

	public function getBrand(){
		return $this->Brand;
	}

	public function setBrand($Brand){
		$this->Brand = $Brand;
	}
}

?>