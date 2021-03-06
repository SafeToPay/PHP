<?php

namespace Safe2Pay\Models\Bank;

/**
 * Class Bank
 *
 * @package Safe2Pay\Models
 */
class Bank implements \JsonSerializable
{
    private $Code;

    function __construct($Code)
    {
        $this->Code = $Code;
    }

    public function getCode()
    {
        return $this->Code;
    }

    public function setCode($Code)
    {
        $this->Code = $Code;
    }

    public function JsonSerialize()
    {
        return [
            'Code' => (string) $this->Code
        ];
    }
}
