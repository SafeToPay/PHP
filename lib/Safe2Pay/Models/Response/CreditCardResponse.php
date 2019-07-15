<?php

namespace Safe2Pay\Models;


class CreditCardResponse
{
    private $CardNumber;
    private $Brand;
    private $Installments;

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

	public function getInstallments(){
		return $this->Installments;
	}

	public function setInstallments($Installments){
		$this->Installments = $Installments;
	}
}

?>