<?php

namespace Models\Merchant;

/**
 * Class MerchantNotify
 *
 * @package Safe2Pay\Models
 */
class MerchantNotify
{
    private $Id;
    private $Merchant;
    private $IsPaymentReceived;
    private $IsBankSlipCreated;
    private $IsBankSlipDue;
    private $IsPaymentRefused;

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getMerchant(){
		return $this->Merchant;
	}

	public function setMerchant($Merchant){
		$this->Merchant = $Merchant;
	}

	public function getIsPaymentReceived(){
		return $this->IsPaymentReceived;
	}

	public function setIsPaymentReceived($IsPaymentReceived){
		$this->IsPaymentReceived = $IsPaymentReceived;
	}

	public function getIsBankSlipCreated(){
		return $this->IsBankSlipCreated;
	}

	public function setIsBankSlipCreated($IsBankSlipCreated){
		$this->IsBankSlipCreated = $IsBankSlipCreated;
	}

	public function getIsBankSlipDue(){
		return $this->IsBankSlipDue;
	}

	public function setIsBankSlipDue($IsBankSlipDue){
		$this->IsBankSlipDue = $IsBankSlipDue;
	}

	public function getIsPaymentRefused(){
		return $this->IsPaymentRefused;
	}

	public function setIsPaymentRefused($IsPaymentRefused){
		$this->IsPaymentRefused = $IsPaymentRefused;
	}
    
}