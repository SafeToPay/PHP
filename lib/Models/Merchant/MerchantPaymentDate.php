<?php

namespace Safe2Pay\Models\Merchant;

/**
 * Class MerchantPaymentDate
 *
 * @package Safe2Pay\Models
 */
class MerchantPaymentDate
{
    private $Id;
    private $Merchant;
    private $PlanFrequence;
    private $PaymentDay;


    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getMerchant()
    {
        return $this->Merchant;
    }

    public function setMerchant($Merchant)
    {
        $this->Merchant = $Merchant;
    }

    public function getPlanFrequence()
    {
        return $this->PlanFrequence;
    }

    public function setPlanFrequence($PlanFrequence)
    {
        $this->PlanFrequence = $PlanFrequence;
    }

    public function getPaymentDay()
    {
        return $this->PaymentDay;
    }

    public function setPaymentDay($PaymentDay)
    {
        $this->PaymentDay = $PaymentDay;
    }
}
