<?php

namespace Safe2Pay\Models;


class Product
{
    private $Code;
    private $Description;
    private $UnitPrice;
    private $Quantity;

    public function getCode(){
		return $this->Code;
	}

	public function setCode($Code){
		$this->Code = $Code;
	}

	public function getDescription(){
		return $this->Description;
	}

	public function setDescription($Description){
		$this->Description = $Description;
	}

	public function getUnitPrice(){
		return $this->UnitPrice;
	}

	public function setUnitPrice($UnitPrice){
		$this->UnitPrice = $UnitPrice;
	}

	public function getQuantity(){
		return $this->Quantity;
	}

	public function setQuantity($Quantity){
		$this->Quantity = $Quantity;
	}
}

?>