<?php

namespace Models\Transactions;

require_once __DIR__.'\Base.php';
/**
 * Class Transaction
 *
 * @package Safe2Pay\Models
 */
class Transaction extends Base implements \JsonSerializable
{

    private $PaymentObject;

    public function getPaymentObject()
    {
        return $this->PaymentObject;
    }

    public function setPaymentObject($PaymentObject)
    {
        $this->PaymentObject = $PaymentObject;
    }

    public function jsonSerialize()
    {
        return[
            "PaymentObject"   => $this->getPaymentObject(),
            "Application" => $this->getApplication(),
            "Vendor" => $this->getVendor(),
            "IsSandbox"   => $this->getIsSandbox(),
            "CallbackUrl" => $this->getCallbackUrl(),
            "PaymentMethod" => $this->getPaymentMethod(),
            "Customer" => $this->getCustomer(),
			"Products" => $this->getProducts(),
			"Splits" => $this->getSplits()
        ];     
    }
}
