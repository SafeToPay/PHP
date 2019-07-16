<?php

namespace Safe2Pay\Models;


class BankTransfer
{
    private $Provider;
    private $Token;
    private $AuthenticationUrl;    

    public function getProvider(){
		return $this->Provider;
	}

	public function setProvider($Provider){
		$this->Provider = $Provider;
	}

	public function getToken(){
		return $this->Token;
	}

	public function setToken($Token){
		$this->Token = $Token;
	}

	public function getAuthenticationUrl(){
		return $this->AuthenticationUrl;
	}

	public function setAuthenticationUrl($AuthenticationUrl){
		$this->AuthenticationUrl = $AuthenticationUrl;
	}
}

?>