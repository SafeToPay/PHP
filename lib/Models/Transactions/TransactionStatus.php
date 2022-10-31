<?php

namespace Safe2Pay\Models\Transactions;

/**
 * Class TransactionStatus.
 */
class TransactionStatus
{
    private $Id;
    private $Code;
    private $Name;

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getCode()
    {
        return $this->Code;
    }

    public function setCode($Code)
    {
        $this->Code = $Code;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
    }
}
