<?php

namespace Safe2Pay\Models\Payment;

/**
 * Class Pix
 *
 * @package Safe2Pay\Models
 */
class Pix
{
    private $QrCode;
    private $Key;

    public function getQrCode()
    {
        return $this->QrCode;
    }

    public function setQrCode($QrCode)
    {
        $this->QrCode = $QrCode;
    }

    public function getKey()
    {
        return $this->Key;
    }

    public function setKey($Key)
    {
        $this->Key = $Key;
    }

}