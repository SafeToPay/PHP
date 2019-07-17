<?php

namespace Safe2Pay\Models;
/**
 * Class SingleSalePaymentMethod
 *
 * @package Safe2Pay\Models
 */
class SingleSalePaymentMethod implements \JsonSerializable
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

	public function __construct($CodePaymentMethod)
	{
		$this->CodePaymentMethod = $CodePaymentMethod;
	}

	public function JsonSerialize()
    {
        return [
				'CodePaymentMethod' =>  $this->CodePaymentMethod
        ];
    }
}

?>