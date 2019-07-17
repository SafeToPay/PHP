<?php

namespace Safe2Pay\Models;

/**
 * Class Customer
 *
 * @package Safe2Pay\Models
 */

class Customer implements \JsonSerializable
{
    public $Name;
    public $Identity;
    public $Phone;
    public $Email;
    public $Address;

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getIdentity()
    {
        return $this->Identity;
    }

    public function setIdentity($Identity)
    {
        $this->Identity = $Identity;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }


    public function getAddress()
    {
        return $this->Address;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    public function __construct($Name,$Identity,$Email,$Address)
    {
        $this->Name = $Name;
        $this->Identity = $Identity;
        $this->Email = $Email;
        $this->Address = $Address;
    }

    public function jsonSerialize()
    {
        return 
        [
            "Name"   => $this->Name,
            "Identity" => $this->Identity,
            "Phone"   => $this->Phone,
            "Email"   => $this->Email,
            "Address" => $this->Address
        ];
    }
}

?>