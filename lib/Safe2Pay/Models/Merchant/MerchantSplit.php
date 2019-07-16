
<?php

namespace Safe2Pay\Models;


class MerchantSplit
{
    private $PaymentMethodCode;
    private $PaymentMethod;
    private $IsSubaccountTaxPayer;
    private $Taxes;

    public function getPaymentMethodCode(){
		return $this->PaymentMethodCode;
	}

	public function setPaymentMethodCode($PaymentMethodCode){
		$this->PaymentMethodCode = $PaymentMethodCode;
	}

	public function getPaymentMethod(){
		return $this->PaymentMethod;
	}

	public function setPaymentMethod($PaymentMethod){
		$this->PaymentMethod = $PaymentMethod;
	}

	public function getIsSubaccountTaxPayer(){
		return $this->IsSubaccountTaxPayer;
	}

	public function setIsSubaccountTaxPayer($IsSubaccountTaxPayer){
		$this->IsSubaccountTaxPayer = $IsSubaccountTaxPayer;
	}

	public function getTaxes(){
		return $this->Taxes;
	}

	public function setTaxes($Taxes){
		$this->Taxes = $Taxes;
	}


}

?>