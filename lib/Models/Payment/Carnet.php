<?php

namespace Models\Payment;
/**
 * Class Carnet
 *
 * @package Safe2Pay\Models
 */
class Carnet
{
    private $Id;
    private $IdCarnetLot;
    private $Identifier;  
    private $Reference;   
    private $IsProcessed;  
    private $IsAsync;   
    private $Message;  
    private $PenaltyAmount;   
    private $InterestAmount;  
    private $PayableAfterDue;   
    private $IsEnablePartialPayment;  
    private $BankSlips;   
    

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getIdCarnetLot(){
		return $this->IdCarnetLot;
	}

	public function setIdCarnetLot($IdCarnetLot){
		$this->IdCarnetLot = $IdCarnetLot;
	}

	public function getIdentifier(){
		return $this->Identifier;
	}

	public function setIdentifier($Identifier){
		$this->Identifier = $Identifier;
	}

	public function getReference(){
		return $this->Reference;
	}

	public function setReference($Reference){
		$this->Reference = $Reference;
	}

	public function getIsProcessed(){
		return $this->IsProcessed;
	}

	public function setIsProcessed($IsProcessed){
		$this->IsProcessed = $IsProcessed;
	}

	public function getIsAsync(){
		return $this->IsAsync;
	}

	public function setIsAsync($IsAsync){
		$this->IsAsync = $IsAsync;
	}

	public function getMessage(){
		return $this->Message;
	}

	public function setMessage($Message){
		$this->Message = $Message;
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

	public function getPayableAfterDue(){
		return $this->PayableAfterDue;
	}

	public function setPayableAfterDue($PayableAfterDue){
		$this->PayableAfterDue = $PayableAfterDue;
	}

	public function getIsEnablePartialPayment(){
		return $this->IsEnablePartialPayment;
	}

	public function setIsEnablePartialPayment($IsEnablePartialPayment){
		$this->IsEnablePartialPayment = $IsEnablePartialPayment;
	}

	public function getBankSlips(){
		return $this->BankSlips;
	}

	public function setBankSlips($BankSlips){
		$this->BankSlips = $BankSlips;
	}
    
}

class CarnetBankslip
{
    private $IdTransaction;
    private $IdMerchant;
    private $Amount;  
    private $DueDate;   
    private $Instruction;  
    private $Message;   

    public function getIdTransaction(){
		return $this->IdTransaction;
	}

	public function setIdTransaction($IdTransaction){
		$this->IdTransaction = $IdTransaction;
	}

	public function getIdMerchant(){
		return $this->IdMerchant;
	}

	public function setIdMerchant($IdMerchant){
		$this->IdMerchant = $IdMerchant;
	}

	public function getAmount(){
		return $this->Amount;
	}

	public function setAmount($Amount){
		$this->Amount = $Amount;
	}

	public function getDueDate(){
		return $this->DueDate;
	}

	public function setDueDate($DueDate){
		$this->DueDate = $DueDate;
	}

	public function getInstruction(){
		return $this->Instruction;
	}

	public function setInstruction($Instruction){
		$this->Instruction = $Instruction;
	}

	public function getMessage(){
		return $this->Message;
	}

	public function setMessage($Message){
		$this->Message = $Message;
	}
}

?>