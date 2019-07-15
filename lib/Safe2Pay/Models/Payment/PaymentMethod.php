
<?php

namespace Safe2Pay\Models;


class PaymentMethod
{
    private $Id;
    private $Code;
    private $Name;
    private $CodePaymentMethod;

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getCode(){
		return $this->Code;
	}

	public function setCode($Code){
		$this->Code = $Code;
	}

	public function getName(){
		return $this->Name;
	}

	public function setName($Name){
		$this->Name = $Name;
    }
    
    public function getCodePaymentMethod(){
		return $this->CodePaymentMethod;
	}

	public function setCodePaymentMethod($CodePaymentMethod){
		$this->CodePaymentMethod = $CodePaymentMethod;
	}
}

?>