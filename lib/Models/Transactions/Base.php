<?php

namespace Safe2Pay\Models\Transactions;

require_once __DIR__ . '/../Payment/PaymentMethod.php';

use Safe2Pay\Models\Payment\PaymentMethod;

/**
 * Class Base.
 */
class Base
{
    public $PaymentMethod;
    private $Id;
    private $Authenticate;
    private $IdTransaction;
    private $IsSandbox;
    private $Application;
    private $Reference;
    private $Vendor;
    private $CallbackUrl;
    private $Customer;
    private $Products;
    private $Splits;
    private $IsPreAuthorization;

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getIdTransaction()
    {
        return $this->IdTransaction;
    }

    public function setIdTransaction($IdTransaction)
    {
        $this->IdTransaction = $IdTransaction;
    }

    public function getIsSandbox()
    {
        return $this->IsSandbox;
    }

    public function setIsSandbox($IsSandbox)
    {
        $this->IsSandbox = $IsSandbox;
    }

    public function getApplication()
    {
        return $this->Application;
    }

    public function setApplication($Application)
    {
        $this->Application = $Application;
    }

    public function getReference()
    {
        return $this->Reference;
    }

    public function setReference($Reference)
    {
        $this->Reference = $Reference;
    }

    public function getVendor()
    {
        return $this->Vendor;
    }

    public function setVendor($Vendor)
    {
        $this->Vendor = $Vendor;
    }

    public function getCallbackUrl()
    {
        return $this->CallbackUrl;
    }

    public function setCallbackUrl($CallbackUrl)
    {
        $this->CallbackUrl = $CallbackUrl;
    }

    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod($Code)
    {
        if ($Code != null) {
            $this->PaymentMethod = new PaymentMethod($Code);
        }
    }

    public function getCustomer()
    {
        return $this->Customer;
    }

    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
    }

    public function getProducts()
    {
        return $this->Products;
    }

    public function setProducts($Products)
    {
        $this->Products = $Products;
    }

    public function getSplits()
    {
        return $this->Splits;
    }

    public function setSplits($Splits)
    {
        $this->Splits = $Splits;
    }
}
