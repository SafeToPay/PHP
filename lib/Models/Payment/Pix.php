<?php

namespace Safe2Pay\Models\Payment;

/**
 * Class Pix
 *
 * @package Safe2Pay\Models
 */
class Pix implements \JsonSerializable {

    private $Expiration;

    public function getExpiration() {
        return $this->Expiration;
    }

    public function setExpiration($Expiration) {
        $this->Expiration = $Expiration;
    }

    function __construct($Expiration = null) {
        $this->Expiration = $Expiration;
    }

    public function jsonSerialize() {
        $object = [];
        if (!empty(( $this->Expiration))) {
            $object['Expiration'] = $this->Expiration;
        }
        return $object;
    }

}
