
<?php

include_once(__DIR__.'/Address.php');

class Customer
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

    public function __construct()
    {
        $this->Address = new Address();   
    }

}

?>