
<?php

namespace Safe2Pay\Models;

class SingleSalePaymentMethod
{
    private $Id;
    private $IdSingleSale; 
    private $CodePaymentMethod; 
    private $PaymentMethod; 

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getIdSingleSale(){
		return $this->IdSingleSale;
	}

	public function setIdSingleSale($IdSingleSale){
		$this->IdSingleSale = $IdSingleSale;
	}

	public function getCodePaymentMethod(){
		return $this->CodePaymentMethod;
	}

	public function setCodePaymentMethod($CodePaymentMethod){
		$this->CodePaymentMethod = $CodePaymentMethod;
	}

	public function getPaymentMethod(){
		return $this->PaymentMethod;
	}

	public function setPaymentMethod($PaymentMethod){
		$this->PaymentMethod = $PaymentMethod;
	}
}

?>