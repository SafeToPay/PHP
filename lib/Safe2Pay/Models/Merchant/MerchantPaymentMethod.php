

<?php

namespace Safe2Pay\Models;


class MerchantPaymentMethod
{
    private $Id;
    private $Merchant;
    private $PaymentMethod;
    private $IsEnabled;

    private $InstallmentLimit;
    private $MinorInstallmentAmount;

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

	public function getPaymentMethod(){
		return $this->PaymentMethod;
	}

	public function setPaymentMethod($PaymentMethod){
		$this->PaymentMethod = $PaymentMethod;
	}

	public function getIsEnabled(){
		return $this->IsEnabled;
	}

	public function setIsEnabled($IsEnabled){
		$this->IsEnabled = $IsEnabled;
	}

	public function getInstallmentLimit(){
		return $this->InstallmentLimit;
	}

	public function setInstallmentLimit($InstallmentLimit){
		$this->InstallmentLimit = $InstallmentLimit;
	}

	public function getMinorInstallmentAmount(){
		return $this->MinorInstallmentAmount;
	}

	public function setMinorInstallmentAmount($MinorInstallmentAmount){
		$this->MinorInstallmentAmount = $MinorInstallmentAmount;
	}

}

?>