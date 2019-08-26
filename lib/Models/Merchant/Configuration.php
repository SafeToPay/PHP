<?php

namespace Safe2Pay\Models\Merchant;

/**
 * Class Configuration
 *
 * @package Safe2Pay\Models
 */

class Configuration
{
    private $MerchantPaymentMethod;
    private $MerchantNotify;

    public function getMerchantPaymentMethod(){
		return $this->MerchantPaymentMethod;
	}

	public function setMerchantPaymentMethod($MerchantPaymentMethod){
		$this->MerchantPaymentMethod = $MerchantPaymentMethod;
	}

	public function getMerchantNotify(){
		return $this->MerchantNotify;
	}

	public function setMerchantNotify($MerchantNotify){
		$this->MerchantNotify = $MerchantNotify;
	}

}