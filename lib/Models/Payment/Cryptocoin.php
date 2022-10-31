<?php

namespace Safe2Pay\Models\Payment;

/**
 * Class Cryptocoin
 *
 * @package Safe2Pay\Models
 */
class Cryptocoin implements \JsonSerializable
{
    private $Amount;
    private $Address;
    private $QrCode;
    private $Symbol;


    public function getSymbol()
    {
        return $this->Symbol;
    }

    public function setSymbol($Symbol)
    {
        $this->Symbol = $Symbol;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
    }


    public function getQrCode()
    {
        return $this->QrCode;
    }

    public function setQrCode($QrCode)
    {
        $this->QrCode = $QrCode;
    }

    function __construct($Symbol)
    {
        $this->Symbol = $Symbol;
    }

    public function jsonSerialize()
    {
        return
            [
                "Symbol" => $this->Symbol
            ];
    }
}