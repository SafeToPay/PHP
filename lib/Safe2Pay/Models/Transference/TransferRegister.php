<?php

namespace Safe2Pay\Models;

class Transfer
{
    private $Id;
    private $IdTransfer;
    private $IdMerchant;
    private $BankData;
    private $Identity;
    private $Amount;
    private $Identification;

    private $CallbackUrl;
    private $IsTransferred;
    private $IsReleaseTransfer;

    private $IsNotified;
    private $IsReturned;
    private $HashScheduling;
    private $HashConfirmation;

    private $CompensationDate;
    private $CreatedDate;

    private $ChangedDate;
    private $Validation;
    private $IdMerchantRequester;

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getIdTransfer(){
		return $this->IdTransfer;
	}

	public function setIdTransfer($IdTransfer){
		$this->IdTransfer = $IdTransfer;
	}

	public function getIdMerchant(){
		return $this->IdMerchant;
	}

	public function setIdMerchant($IdMerchant){
		$this->IdMerchant = $IdMerchant;
	}

	public function getBankData(){
		return $this->BankData;
	}

	public function setBankData($BankData){
		$this->BankData = $BankData;
	}

	public function getIdentity(){
		return $this->Identity;
	}

	public function setIdentity($Identity){
		$this->Identity = $Identity;
	}

	public function getAmount(){
		return $this->Amount;
	}

	public function setAmount($Amount){
		$this->Amount = $Amount;
	}

	public function getIdentification(){
		return $this->Identification;
	}

	public function setIdentification($Identification){
		$this->Identification = $Identification;
	}

	public function getCallbackUrl(){
		return $this->CallbackUrl;
	}

	public function setCallbackUrl($CallbackUrl){
		$this->CallbackUrl = $CallbackUrl;
	}

	public function getIsTransferred(){
		return $this->IsTransferred;
	}

	public function setIsTransferred($IsTransferred){
		$this->IsTransferred = $IsTransferred;
	}

	public function getIsReleaseTransfer(){
		return $this->IsReleaseTransfer;
	}

	public function setIsReleaseTransfer($IsReleaseTransfer){
		$this->IsReleaseTransfer = $IsReleaseTransfer;
	}

	public function getIsNotified(){
		return $this->IsNotified;
	}

	public function setIsNotified($IsNotified){
		$this->IsNotified = $IsNotified;
	}

	public function getIsReturned(){
		return $this->IsReturned;
	}

	public function setIsReturned($IsReturned){
		$this->IsReturned = $IsReturned;
	}

	public function getHashScheduling(){
		return $this->HashScheduling;
	}

	public function setHashScheduling($HashScheduling){
		$this->HashScheduling = $HashScheduling;
	}

	public function getHashConfirmation(){
		return $this->HashConfirmation;
	}

	public function setHashConfirmation($HashConfirmation){
		$this->HashConfirmation = $HashConfirmation;
	}

	public function getCompensationDate(){
		return $this->CompensationDate;
	}

	public function setCompensationDate($CompensationDate){
		$this->CompensationDate = $CompensationDate;
	}

	public function getCreatedDate(){
		return $this->CreatedDate;
	}

	public function setCreatedDate($CreatedDate){
		$this->CreatedDate = $CreatedDate;
	}

	public function getChangedDate(){
		return $this->ChangedDate;
	}

	public function setChangedDate($ChangedDate){
		$this->ChangedDate = $ChangedDate;
	}

	public function getValidation(){
		return $this->Validation;
	}

	public function setValidation($Validation){
		$this->Validation = $Validation;
	}

	public function getIdMerchantRequester(){
		return $this->IdMerchantRequester;
	}

	public function setIdMerchantRequester($IdMerchantRequester){
		$this->IdMerchantRequester = $IdMerchantRequester;
	}
}

?>