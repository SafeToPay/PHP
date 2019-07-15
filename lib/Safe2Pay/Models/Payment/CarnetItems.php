
<?php

namespace Safe2Pay\Models;

class CarnetItems
{
    private $Id;
    private $Identifier;
    private $Reference;  
    private $IsProcessed;       
    private $Message;  
    private $PaymentObject;    

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
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

	public function getMessage(){
		return $this->Message;
	}

	public function setMessage($Message){
		$this->Message = $Message;
	}

	public function getPaymentObject(){
		return $this->PaymentObject;
	}

	public function setPaymentObject($PaymentObject){
		$this->PaymentObject = $PaymentObject;
	}
   
}


class PaymentObjectCarnet
{
    private $BankSlips;

    public function getBankSlips(){
		return $this->BankSlips;
	}

	public function setBankSlips($BankSlips){
		$this->BankSlips = $BankSlips;
	}
}

class CarnetLotBankSlip
{
    private $IdTransaction;
    private $TransactionStatus;
    private $BankSlipNumber;  
    private $DigitableLine;       
    private $Barcode;  
    private $DueDate;   

    public function getIdTransaction(){
		return $this->IdTransaction;
	}

	public function setIdTransaction($IdTransaction){
		$this->IdTransaction = $IdTransaction;
	}

	public function getTransactionStatus(){
		return $this->TransactionStatus;
	}

	public function setTransactionStatus($TransactionStatus){
		$this->TransactionStatus = $TransactionStatus;
	}

	public function getBankSlipNumber(){
		return $this->BankSlipNumber;
	}

	public function setBankSlipNumber($BankSlipNumber){
		$this->BankSlipNumber = $BankSlipNumber;
	}

	public function getDigitableLine(){
		return $this->DigitableLine;
	}

	public function setDigitableLine($DigitableLine){
		$this->DigitableLine = $DigitableLine;
	}

	public function getBarcode(){
		return $this->Barcode;
	}

	public function setBarcode($Barcode){
		$this->Barcode = $Barcode;
	}

	public function getDueDate(){
		return $this->DueDate;
	}

	public function setDueDate($DueDate){
		$this->DueDate = $DueDate;
	}
}


?>