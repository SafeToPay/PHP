<?php
namespace Models\SingleSale;
/**
 * Class SingleSalePayment
 *
 * @package Safe2Pay\Models
 */

class SingleSalePayment
{
    private $PaymentMethod;
    private $PaymentDate; 

    public function getPaymentMethod(){
		return $this->PaymentMethod;
	}

	public function setPaymentMethod($PaymentMethod){
		$this->PaymentMethod = $PaymentMethod;
	}

	public function getPaymentDate(){
		return $this->PaymentDate;
	}

	public function setPaymentDate($PaymentDate){
		$this->PaymentDate = $PaymentDate;
	}
}

?>