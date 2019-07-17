
<?php

namespace Safe2Pay\Models;
/**
 * Class CheckoutResponse
 *
 * @package Safe2Pay\Models
 */
class CheckoutResponse
{
    private $IdTransaction;
    private $Status;
    private $Description;
    private $Message;

    //Boleto
    private $BankSlipNumber;
    private $DueDate;
    private $DigitableLine;
    private $Barcode;
    private $BankSlipUrl;

    //Carnê
    private $CarnetUrl;
    private $BankSlips;
    private $Identifier;

    //Cartão de crédito
    private $Token;
    private $CreditCard;

    //BitCoin
    private $QrCode;
    private $AmountBTC;
    private $WalletAddress;

      //Cartão de débito
    private $DebitCard;
    private $AuthenticationUrl;

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

	public function getDescription(){
		return $this->Description;
	}

	public function setDescription($Description){
		$this->Description = $Description;
	}

	public function getMessage(){
		return $this->Message;
	}

	public function setMessage($Message){
		$this->Message = $Message;
	}

	public function getBankSlipNumber(){
		return $this->BankSlipNumber;
	}

	public function setBankSlipNumber($BankSlipNumber){
		$this->BankSlipNumber = $BankSlipNumber;
	}

	public function getDueDate(){
		return $this->DueDate;
	}

	public function setDueDate($DueDate){
		$this->DueDate = $DueDate;
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

	public function getBankSlipUrl(){
		return $this->BankSlipUrl;
	}

	public function setBankSlipUrl($BankSlipUrl){
		$this->BankSlipUrl = $BankSlipUrl;
	}

	public function getCarnetUrl(){
		return $this->CarnetUrl;
	}

	public function setCarnetUrl($CarnetUrl){
		$this->CarnetUrl = $CarnetUrl;
	}

	public function getBankSlips(){
		return $this->BankSlips;
	}

	public function setBankSlips($BankSlips){
		$this->BankSlips = $BankSlips;
	}

	public function getIdentifier(){
		return $this->Identifier;
	}

	public function setIdentifier($Identifier){
		$this->Identifier = $Identifier;
	}

	public function getToken(){
		return $this->Token;
	}

	public function setToken($Token){
		$this->Token = $Token;
	}

	public function getCreditCard(){
		return $this->CreditCard;
	}

	public function setCreditCard($CreditCard){
		$this->CreditCard = $CreditCard;
	}

	public function getQrCode(){
		return $this->QrCode;
	}

	public function setQrCode($QrCode){
		$this->QrCode = $QrCode;
	}

	public function getAmountBTC(){
		return $this->AmountBTC;
	}

	public function setAmountBTC($AmountBTC){
		$this->AmountBTC = $AmountBTC;
	}

	public function getWalletAddress(){
		return $this->WalletAddress;
	}

	public function setWalletAddress($WalletAddress){
		$this->WalletAddress = $WalletAddress;
	}

	public function getDebitCard(){
		return $this->DebitCard;
	}

	public function setDebitCard($DebitCard){
		$this->DebitCard = $DebitCard;
	}

	public function getAuthenticationUrl(){
		return $this->AuthenticationUrl;
	}

	public function setAuthenticationUrl($AuthenticationUrl){
		$this->AuthenticationUrl = $AuthenticationUrl;
	}
 
}

?>