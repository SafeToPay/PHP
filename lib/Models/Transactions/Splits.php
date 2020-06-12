<?php

namespace Safe2Pay\Models\Transactions;

require_once __DIR__ . '/Base.php';

class Splits implements \JsonSerializable
{
    public $IdReceiver;
    public $Identity;
    public $Name;
    public $IsPayTax;
    public $Amount;
    public $CodeTaxType;
    public $CodeReceiverType;

    public function setIdReceiver($IdReceiver)
    {
        $this->IdReceiver = $IdReceiver;
    }

    public function getIdReceiver()
    {
        return $this->IdReceiver;
    }

    public function setIdentity($Identity)
    {
        $this->Identity = $Identity;
    }

    public function getIdentity()
    {
        return $this->Identity;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setIsPayTax($IsPayTax)
    {
        $this->IsPayTax = $IsPayTax;
    }

    public function getIsPayTax()
    {
        return $this->IsPayTax;
    }

    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function setCodeTaxType($CodeTaxType)
    {
        $this->CodeTaxType = $CodeTaxType;
    }

    public function getCodeTaxType()
    {
        return $this->CodeTaxType;
    }

    public function setCodeReceiverType($CodeReceiverType)
    {
        $this->CodeReceiverType = $CodeReceiverType;
    }

    public function getCodeReceiverType()
    {
        return $this->CodeReceiverType;
    }


    public function jsonSerialize()
    {
        return [
            'IdReceiver' => $this->getIdReceiver(),
            'Identity' => $this->getIdentity(),
            'Name' => $this->getName(),
            'IsPayTax' => $this->getIsPayTax(),
            'Amount' => $this->getAmount(),
            'CodeTaxType' => $this->getCodeTaxType(),
            'CodeReceiverType' => $this->getCodeReceiverType()
        ];
    }
}
