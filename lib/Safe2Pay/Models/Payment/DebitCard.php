<?php

namespace Safe2Pay\Models;

class CreditCard
{
    private $Holder;
    private $CardNumber;
    private $ExpirationDate;  
    private $SecurityCode;       
    private $Token;  
    private $Authenticate;  

    public function getHolder(){
		return $this->Holder;
	}

	public function setHolder($Holder){
		$this->Holder = $Holder;
	}

	public function getCardNumber(){
		return $this->CardNumber;
	}

	public function setCardNumber($CardNumber){
		$this->CardNumber = $CardNumber;
	}

	public function getExpirationDate(){
		return $this->ExpirationDate;
	}

	public function setExpirationDate($ExpirationDate){
		$this->ExpirationDate = $ExpirationDate;
	}

	public function getSecurityCode(){
		return $this->SecurityCode;
	}

	public function setSecurityCode($SecurityCode){
		$this->SecurityCode = $SecurityCode;
	}

	public function getToken(){
		return $this->Token;
	}

	public function setToken($Token){
		$this->Token = $Token;
    }  
    
    public function getAuthenticate(){
		return $this->Authenticate;
	}

	public function setAuthenticate($Authenticate){
		$this->Authenticate = $Authenticate;
	}   
}

?>