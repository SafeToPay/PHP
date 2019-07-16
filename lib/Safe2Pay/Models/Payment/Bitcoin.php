
<?php

namespace Safe2Pay\Models;


class Bitcoin
{
    private $AmountBitcoin;
    private $Address;
    private $Token;  
    private $QrCode;   

    public function getAmountBitcoin(){
		return $this->AmountBitcoin;
	}

	public function setAmountBitcoin($AmountBitcoin){
		$this->AmountBitcoin = $AmountBitcoin;
	}

	public function getAddress(){
		return $this->Address;
	}

	public function setAddress($Address){
		$this->Address = $Address;
	}

	public function getToken(){
		return $this->Token;
	}

	public function setToken($Token){
		$this->Token = $Token;
	}

	public function getQrCode(){
		return $this->QrCode;
	}

	public function setQrCode($QrCode){
		$this->QrCode = $QrCode;
	}
}

?>