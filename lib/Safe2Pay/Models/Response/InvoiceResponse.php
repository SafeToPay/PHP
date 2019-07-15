<?php

namespace Safe2Pay\Models;


class InvoiceResponse
{
    private $Id; 
    private $Merchant;
    private $Customer;
    private $IdTransaction;
    private $Status;
    private $SingleSaleHash;
    private $Reference;
    private $BankSplipUrl;
    private $DueDate;
    private $ExpirationDate;
    private $CreatedDate;
    private $Amount;
    private $DiscountAmount;
    private $PenaltyAmount;
    private $InterestAmount;
    private $Emails;
    private $Messages;
    private $Instruction;
    private $IsExcluded;
    private $TransactionStatus;
    private $Products;
    private $PaymentMethods;
    private $ApiVersion;
    private $IdSubscription;


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

	public function getCustomer(){
		return $this->Customer;
	}

	public function setCustomer($Customer){
		$this->Customer = $Customer;
	}

	public function getIdTransaction(){
		return $this->IdTransaction;
	}

	public function setIdTransaction($IdTransaction){
		$this->IdTransaction = $IdTransaction;
	}

	public function getStatus(){
		return $this->Status;
	}

	public function setStatus($Status){
		$this->Status = $Status;
	}

	public function getSingleSaleHash(){
		return $this->SingleSaleHash;
	}

	public function setSingleSaleHash($SingleSaleHash){
		$this->SingleSaleHash = $SingleSaleHash;
	}

	public function getReference(){
		return $this->Reference;
	}

	public function setReference($Reference){
		$this->Reference = $Reference;
	}

	public function getBankSplipUrl(){
		return $this->BankSplipUrl;
	}

	public function setBankSplipUrl($BankSplipUrl){
		$this->BankSplipUrl = $BankSplipUrl;
	}

	public function getDueDate(){
		return $this->DueDate;
	}

	public function setDueDate($DueDate){
		$this->DueDate = $DueDate;
	}

	public function getExpirationDate(){
		return $this->ExpirationDate;
	}

	public function setExpirationDate($ExpirationDate){
		$this->ExpirationDate = $ExpirationDate;
	}

	public function getCreatedDate(){
		return $this->CreatedDate;
	}

	public function setCreatedDate($CreatedDate){
		$this->CreatedDate = $CreatedDate;
	}

	public function getAmount(){
		return $this->Amount;
	}

	public function setAmount($Amount){
		$this->Amount = $Amount;
	}

	public function getDiscountAmount(){
		return $this->DiscountAmount;
	}

	public function setDiscountAmount($DiscountAmount){
		$this->DiscountAmount = $DiscountAmount;
	}

	public function getPenaltyAmount(){
		return $this->PenaltyAmount;
	}

	public function setPenaltyAmount($PenaltyAmount){
		$this->PenaltyAmount = $PenaltyAmount;
	}

	public function getInterestAmount(){
		return $this->InterestAmount;
	}

	public function setInterestAmount($InterestAmount){
		$this->InterestAmount = $InterestAmount;
	}

	public function getEmails(){
		return $this->Emails;
	}

	public function setEmails($Emails){
		$this->Emails = $Emails;
	}

	public function getMessages(){
		return $this->Messages;
	}

	public function setMessages($Messages){
		$this->Messages = $Messages;
	}

	public function getInstruction(){
		return $this->Instruction;
	}

	public function setInstruction($Instruction){
		$this->Instruction = $Instruction;
	}

	public function getIsExcluded(){
		return $this->IsExcluded;
	}

	public function setIsExcluded($IsExcluded){
		$this->IsExcluded = $IsExcluded;
	}

	public function getTransactionStatus(){
		return $this->TransactionStatus;
	}

	public function setTransactionStatus($TransactionStatus){
		$this->TransactionStatus = $TransactionStatus;
	}

	public function getProducts(){
		return $this->Products;
	}

	public function setProducts($Products){
		$this->Products = $Products;
	}

	public function getPaymentMethods(){
		return $this->PaymentMethods;
	}

	public function setPaymentMethods($PaymentMethods){
		$this->PaymentMethods = $PaymentMethods;
	}

	public function getApiVersion(){
		return $this->ApiVersion;
	}

	public function setApiVersion($ApiVersion){
		$this->ApiVersion = $ApiVersion;
	}

	public function getIdSubscription(){
		return $this->IdSubscription;
	}

	public function setIdSubscription($IdSubscription){
		$this->IdSubscription = $IdSubscription;
	}

}

?>