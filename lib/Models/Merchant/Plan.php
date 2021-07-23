<?php

namespace Safe2Pay\Models\Merchant;

/**
 * Class Plan
 *
 * @package Safe2Pay\Models
 */
class Plan implements \JsonSerializable
{
    private $Id;
    private $PlanFrequence;
    private $Name;
    private $Description;
    private $Amount;
    private $SubscriptionLimit;
    private $DaysTrial;
    private $DaysToInactive;
    private $ChargeDay;
    private $SubscriptionTax;
    private $IsProRata;
    private $IsEnabled;
    private $IsImmediateCharge;
    private $CallbackUrl;
    private $ExpirationDate;

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getPlanFrequence()
    {
        return $this->PlanFrequence;
    }

    public function setPlanFrequence($PlanFrequence)
    {
        $this->PlanFrequence = $PlanFrequence;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    public function getSubscriptionLimit()
    {
        return $this->SubscriptionLimit;
    }

    public function setSubscriptionLimit($SubscriptionLimit)
    {
        $this->SubscriptionLimit = $SubscriptionLimit;
    }

    public function getDaysTrial()
    {
        return $this->DaysTrial;
    }

    public function setDaysTrial($DaysTrial)
    {
        $this->DaysTrial = $DaysTrial;
    }

    public function getDaysToInactive()
    {
        return $this->DaysToInactive;
    }

    public function setDaysToInactive($DaysToInactive)
    {
        $this->DaysToInactive = $DaysToInactive;
    }

    public function getChargeDay()
    {
        return $this->ChargeDay;
    }

    public function setChargeDay($ChargeDay)
    {
        $this->ChargeDay = $ChargeDay;
    }

    public function getSubscriptionTax()
    {
        return $this->SubscriptionTax;
    }

    public function setSubscriptionTax($SubscriptionTax)
    {
        $this->SubscriptionTax = $SubscriptionTax;
    }

    public function getIsProRata()
    {
        return $this->IsProRata;
    }

    public function setIsProRata($IsProRata)
    {
        $this->IsProRata = $IsProRata;
    }

    public function getIsEnabled()
    {
        return $this->IsEnabled;
    }

    public function setIsEnabled($IsEnabled)
    {
        $this->IsEnabled = $IsEnabled;
    }

    public function getIsImmediateCharge()
    {
        return $this->IsImmediateCharge;
    }

    public function setIsImmediateCharge($IsImmediateCharge)
    {
        $this->IsImmediateCharge = $IsImmediateCharge;
    }

    public function getCallbackUrl()
    {
        return $this->CallbackUrl;
    }

    public function setCallbackUrl($CallbackUrl)
    {
        $this->CallbackUrl = $CallbackUrl;
    }

    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    public function setExpirationDate($ExpirationDate)
    {
        $this->ExpirationDate = $ExpirationDate;
    }

    public function JsonSerialize()
    {
        return [
                'Id' => $this->Id,
                'PlanFrequence' =>  $this->PlanFrequence,
                'Name' => (string) $this->Name,
                'Description' => (string) $this->Description,
                'Amount' => (string) $this->Amount,
                'SubscriptionLimit' => (string) $this->SubscriptionLimit,
                'DaysTrial' => (int) $this->DaysTrial,
                'DaysToInactive' => (string) $this->DaysToInactive,
                'ChargeDay' => (string)  $this->ChargeDay,
                'SubscriptionTax' => (string) $this->SubscriptionTax,
                'IsProRata' => (bool) $this->IsProRata,
                'IsEnabled' => (bool) $this->IsEnabled,
                'IsImmediateCharge' => (bool) $this->IsImmediateCharge,
                'CallbackUrl' => (string) $this->CallbackUrl,
                'ExpirationDate' => (string) $this->ExpirationDate
        ];
    }
}
