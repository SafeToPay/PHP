<?php

namespace Safe2Pay\Models\SingleSale;
/**
 * Class SingleSale
 *
 * @package Safe2Pay\Models
 */
class SingleSale implements \JsonSerializable
{
    private $Merchant;
    private $Customer;
    private $IdTransaction;
    private $SingleSaleHash;
    private $Reference;
    private $CallbackUrl;
    private $SingleSaleUrl;
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
    private $Payment;
    private $Products;
    private $PaymentMethods;
    private $IdSubscription;

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

	public function getCallbackUrl(){
		return $this->CallbackUrl;
	}

	public function setCallbackUrl($CallbackUrl){
		$this->CallbackUrl = $CallbackUrl;
	}

	public function getSingleSaleUrl(){
		return $this->SingleSaleUrl;
	}

	public function setSingleSaleUrl($SingleSaleUrl){
		$this->SingleSaleUrl = $SingleSaleUrl;
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

	public function getPayment(){
		return $this->Payment;
	}

	public function setPayment($Payment){
		$this->Payment = $Payment;
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

	public function getIdSubscription(){
		return $this->IdSubscription;
	}

	public function setIdSubscription($IdSubscription){
		$this->IdSubscription = $IdSubscription;
	}

	public function __construct($Customer,$Products,$ExpirationDate,$PaymentMethods,$DueDate,$Reference,$PenaltyAmount,$InterestAmount,$Emails,$Messages,$Instruction)
	{
		$this->Customer = $Customer;
		$this->Products = $Products;
		$this->ExpirationDate = $ExpirationDate;
		$this->PaymentMethods = $PaymentMethods;
		$this->DueDate = $DueDate;
		$this->Reference = $Reference;
		$this->PenaltyAmount = $PenaltyAmount;
		$this->InterestAmount = $InterestAmount;
		$this->Emails = $Emails;
		$this->Messages = $Messages;
		$this->Instruction = $Instruction;
	}

	public function JsonSerialize()
    {
        return [
				'Customer' =>  $this->Customer,
				'Products' => (array) $this->Products,
				'ExpirationDate' => $this->ExpirationDate,
				'PaymentMethods' =>$this->PaymentMethods,
				'DueDate' => $this->DueDate,
				'Reference' =>(string) $this->Reference,
				'PenaltyAmount' => $this->PenaltyAmount,
				'InterestAmount' => $this->InterestAmount,
				'Emails' => $this->Emails,
				'Messages' =>(array) $this->Messages,
				'Instruction' => $this->Instruction,
				'SingleSaleHash' =>(string)  $this->SingleSaleHash,
				'CallbackUrl' =>(string) $this->CallbackUrl
        ];
    }
}
?>