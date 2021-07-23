<?php

namespace Safe2Pay\Models\Merchant;

/**
 * Class PlanFrequence
 *
 * @package Safe2Pay\Models
 */

// Code Name
// 1    Mensal
// 2    Bimestral
// 3    Trimestral
// 4    Semestral
// 5    Anual
// 6    Semanal
// 7    Diário

class PlanFrequence implements \JsonSerializable
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

    public function JsonSerialize()
    {
        return [
                'Code' =>  $this->Code,
        ];
    }
}
