<?php

namespace Safe2Pay\Models\Merchant;

/**
 * Class ListTax
 *
 * @package Safe2Pay\Models
 */

class ListTax
{
    private $Id;
    private $IdMerchantPaymentMethod;
    private $InitialInstallment;
    private $EndInstallment;
    private $Amount;
    private $TaxType;


    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getIdMerchantPaymentMethod()
    {
        return $this->IdMerchantPaymentMethod;
    }

    public function setIdMerchantPaymentMethod($IdMerchantPaymentMethod)
    {
        $this->IdMerchantPaymentMethod = $IdMerchantPaymentMethod;
    }

    public function getInitialInstallment()
    {
        return $this->InitialInstallment;
    }

    public function setInitialInstallment($InitialInstallment)
    {
        $this->InitialInstallment = $InitialInstallment;
    }

    public function getEndInstallment()
    {
        return $this->EndInstallment;
    }

    public function setEndInstallment($EndInstallment)
    {
        $this->EndInstallment = $EndInstallment;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    public function getTaxType()
    {
        return $this->TaxType;
    }

    public function setTaxType($TaxType)
    {
        $this->TaxType = $TaxType;
    }
}
