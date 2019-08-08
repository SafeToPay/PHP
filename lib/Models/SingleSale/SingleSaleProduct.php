<?php 

namespace Models\SingleSale;
/**
 * Class SingleSaleProduct
 *
 * @package Safe2Pay\Models
 */
class SingleSaleProduct implements \JsonSerializable
{
    private $Id;
    private $Description;
    private $UnitPrice;
    private $Quantity;

    public function getId(){
		return $this->Code;
	}

	public function setId($Id){
		$this->Id = $Id;
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

	public function __construct($Id,$Description,$UnitPrice,$Quantity)
	{
		$this->Id = $Id;
		$this->Description = $Description;
		$this->UnitPrice = $UnitPrice;
		$this->Quantity = $Quantity;

	}


	public function jsonSerialize()
    {
		return[
			"Id" => $this->Id,
			"Description" => $this->Description,
			"UnitPrice" => $this->UnitPrice,
			"Quantity" => $this->Quantity
		];     
    }

}

?>