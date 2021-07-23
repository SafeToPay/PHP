<?php

namespace Safe2Pay\Models\General;

/**
 * Class Address
 *
 * @package Safe2Pay\Models
 */
class Address implements \JsonSerializable
{
    public $ZipCode;
    public $Street;
    public $Number;
    public $Complement;
    public $District;
    public $CityName;
    public $StateInitials;
    public $CountryName;

    public function getZipCode()
    {
        return $this->ZipCode;
    }

    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
    }

    public function getStreet()
    {
        return $this->Street;
    }

    public function setStreet($Street)
    {
        $this->Street = $Street;
    }

    public function getNumber()
    {
        return $this->Number;
    }

    public function setNumber($Number)
    {
        $this->Number = $Number;
    }

    public function getComplement()
    {
        return $this->Complement;
    }

    public function setComplement($Complement)
    {
        $this->Complement = $Complement;
    }

    public function getDistrict()
    {
        return $this->District;
    }

    public function setDistrict($District)
    {
        $this->District = $District;
    }

    public function getCityName()
    {
        return $this->CityName;
    }

    public function setCityName($CityName)
    {
        $this->CityName = $CityName;
    }

    public function getStateInitials()
    {
        return $this->StateInitials;
    }

    public function setStateInitials($StateInitials)
    {
        $this->StateInitials = $StateInitials;
    }

    public function getCountryName()
    {
        return $this->CountryName;
    }

    public function setCountryName($CountryName)
    {
        $this->CountryName = $CountryName;
    }

    public function jsonSerialize()
    {
        return[
            "ZipCode" => $this->ZipCode,
            "Street" => $this->Street,
            "Number" => $this->Number,
            "Complement" => $this->Complement,
            "District" => $this->District,
            "CityName" => $this->CityName,
            "StateInitials" => $this->StateInitials,
            "CountryName" => $this->CountryName
        ];
    }
}
