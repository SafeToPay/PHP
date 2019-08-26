<?php

namespace Safe2Pay\Models\Payment;

use DateTime;

/**
 * Class Carnet
 *
 * @package Safe2Pay\Models
 */
class Carnet implements \JsonSerializable
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
	private $Emails;   
    

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getEmails(){
		return $this->Emails;
	}

	public function setEmails($Emails){
		$this->Emails = $Emails;
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


	public function JsonSerialize()
    {
        return [
				'Id' =>(int) $this->Id,
				'IdCarnetLot' => (int) $this->IdCarnetLot,
				'Identifier' => (string) $this->Identifier,
				'Reference' => (string) $this->Reference,
				'IsProcessed' => (bool) $this->IsProcessed,
				'IsAsync' => (bool) $this->IsAsync,
				'PenaltyAmount' => (int) $this->PenaltyAmount,
				'InterestAmount' => (int) $this->InterestAmount,
				'PayableAfterDue' =>(bool)  $this->PayableAfterDue,
				'IsEnablePartialPayment' =>(bool)  $this->IsEnablePartialPayment,
				'Emails' => $this->Emails,
				'BankSlips' =>(array)  $this->BankSlips
        ];
    }   
}

class CarnetBankslip implements \JsonSerializable
{
    private $IdTransaction;
    private $IdMerchant;
    private $Amount;  
    private $DueDate;   
    private $Instruction;  
	private $Message;   
	
	public function __construct($Amount,$DueDate, $Instruction ,$Message){

		$this->Amount = $Amount;
		$this->DueDate =  $DueDate;
		$this->Instruction = $Instruction;
		$this->Message = $Message;
	}


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

	public function JsonSerialize()
    {
        return [
				'Amount' => $this->Amount,
				'DueDate' =>   $this->DueDate,
				'IdMerchant' => (int) $this->IdMerchant,
				'IdTransaction' => (int) $this->IdTransaction,
				'Instruction' => (string) $this->Instruction,
				'Message' => (array) $this->Message,
        ];
    }   

}

?>