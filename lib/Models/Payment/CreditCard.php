<?php

namespace Safe2Pay\Models\Payment;
/**
 * Class CreditCard
 *
 * @package Safe2Pay\Models
 */
class CreditCard implements \JsonSerializable
{
    private $Holder;
    private $CardNumber;
    private $ExpirationDate;
    private $SecurityCode;
    private $Token;
    private $InstallmentQuantity;
    private $IsPreAuthorization;
    private $IsApplyInterest;
    private $InterestRate;
    private $SoftDescriptor;

    function __construct($Holder, $CardNumber, $ExpirationDate, $SecurityCode, $Token, $InstallmentQuantity,
                         $IsPreAuthorization, $IsApplyInterest, $InterestRate, $SoftDescriptor)
    {
        $this->Holder = $Holder;
        $this->CardNumber = $CardNumber;
        $this->ExpirationDate = $ExpirationDate;
        $this->SecurityCode = $SecurityCode;
        $this->Token = $Token;
        $this->InstallmentQuantity = $InstallmentQuantity;
        $this->IsPreAuthorization = $IsPreAuthorization;
        $this->IsApplyInterest = $IsApplyInterest;
        $this->InterestRate = $InterestRate;
        $this->SoftDescriptor = $SoftDescriptor;
    }

    public function getHolder()
    {
        return $this->Holder;
    }

    public function setHolder($Holder)
    {
        $this->Holder = $Holder;
    }

    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
    }

    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    public function setExpirationDate($ExpirationDate)
    {
        $this->ExpirationDate = $ExpirationDate;
    }

    public function getSecurityCode()
    {
        return $this->SecurityCode;
    }

    public function setSecurityCode($SecurityCode)
    {
        $this->SecurityCode = $SecurityCode;
    }

    public function getToken()
    {
        return $this->Token;
    }

    public function setToken($Token)
    {
        $this->Token = $Token;
    }

    public function getInstallmentQuantity()
    {
        return $this->InstallmentQuantity;
    }

    public function setInstallmentQuantity($InstallmentQuantity = 1)
    {
        $this->InstallmentQuantity = $InstallmentQuantity;
    }

    public function getIsPreAuthorization()
    {
        return $this->IsPreAuthorization;
    }

    public function setIsPreAuthorization($IsPreAuthorization = false)
    {
        $this->IsPreAuthorization = $IsPreAuthorization;
    }

    public function getIsApplyInterest()
    {
        return $this->IsApplyInterest;
    }

    public function setIsApplyInterest($IsApplyInterest = false)
    {
        $this->IsApplyInterest = $IsApplyInterest;
    }

    public function getInterestRate()
    {
        return $this->InterestRate;
    }

    public function setInterestRate($InterestRate = null)
    {
        $this->InterestRate = $InterestRate;
    }

    public function getSoftDescriptor()
    {
        return $this->SoftDescriptor;
    }

    public function setSoftDescriptor($SoftDescriptor = "")
    {
        $this->SoftDescriptor = $SoftDescriptor;
    }

    public function JsonSerialize()
    {
        return [
            'Holder' => $this->Holder,
            'CardNumber' => $this->CardNumber,
            'ExpirationDate' => $this->ExpirationDate,
            'SecurityCode' => $this->SecurityCode,
            'Token' => $this->Token,
            'InstallmentQuantity' => (int)$this->InstallmentQuantity,
            'IsPreAuthorization' => (bool)$this->IsPreAuthorization,
            'IsApplyInterest' => (bool)$this->IsApplyInterest,
            'InterestRate' => (float)$this->InterestRate,
            'SoftDescriptor' => $this->SoftDescriptor
        ];
    }
}

?>