<?php 

namespace Safe2Pay\Models;

/**
 * Class Product
 *
 * @package Safe2Pay\Models
 */

class Product implements \JsonSerializable
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

	public function __construct($Code,$Description,$UnitPrice,$Quantity)
	{
		$this->Code = $Code;
		$this->Description = $Description;
		$this->UnitPrice = $UnitPrice;
		$this->Quantity = $Quantity;

	}


	public function jsonSerialize()
    {
		return[
			"Code" => $this->Code,
			"Description" => $this->Description,
			"UnitPrice" => $this->UnitPrice,
			"Quantity" => $this->Quantity
		];     
    }

}

?>