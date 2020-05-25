<?php

namespace Safe2Pay\Models\Payment;
/**
 * Class DebitCard
 *
 * @package Safe2Pay\Models
 */
class DebitCard implements \JsonSerializable
{
    private $Holder;
    private $CardNumber;
    private $ExpirationDate;
    private $SecurityCode;
    private $Token;
    private $Authenticate;
    private $InstallmentQuantity;
    private $IsRecurrence;

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

    public function getAuthenticate()
    {
        return $this->Authenticate;
    }

    public function setAuthenticate($Authenticate)
    {
        $this->Authenticate = $Authenticate;
    }

    public function getInstallmentQuantity()
    {
        return $this->InstallmentQuantity;
    }

    public function setInstallmentQuantity($InstallmentQuantity)
    {
        $this->InstallmentQuantity = $InstallmentQuantity;
    }

    public function getIsRecurrence()
    {
        return $this->IsRecurrence;
    }

    function __construct($Holder, $CardNumber, $ExpirationDate, $SecurityCode)
    {
        $this->Holder = $Holder;
        $this->CardNumber = $CardNumber;
        $this->ExpirationDate = $ExpirationDate;
        $this->SecurityCode = $SecurityCode;
    }

    public function JsonSerialize()
    {
        return [
            'Holder' => $this->Holder,
            'CardNumber' => $this->CardNumber,
            'ExpirationDate' => $this->ExpirationDate,
            'SecurityCode' => $this->SecurityCode,
            'Token' => $this->Token
        ];
    }

}

?>