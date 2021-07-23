<?php

namespace Safe2Pay\Models\Payment;

/**
 * Class Pix
 *
 * @package Safe2Pay\Models
 */
class Pix
{
    private $Expiration;

    public function getExpiration()
    {
        return $this->Expiration;
    }

    public function setExpiration($Expiration)
    {
        $this->Expiration = $Expiration;
    }
}
