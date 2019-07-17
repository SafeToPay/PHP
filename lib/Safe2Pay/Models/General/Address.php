<?php

    namespace Safe2Pay\Models;
/**
 * Class Address
 *
 * @package Safe2Pay\Models
 */
    class Address  implements \JsonSerializable
    {
        public $ZipCode;
        public $Street;
        public $Number;
        public $Complement;
        public $District;
        public $CityName;
        public $StateInitials;
        public $CountryName;
        public $City;
        public $State;
        public $Country;
        
        public function getZipCode(){
            return $this->ZipCode;
        }
    
        public function setZipCode($ZipCode){
            $this->ZipCode = $ZipCode;
        }
    
        public function getStreet(){
            return $this->Street;
        }
    
        public function setStreet($Street){
            $this->Street = $Street;
        }
    
        public function getNumber(){
            return $this->Number;
        }
    
        public function setNumber($Number){
            $this->Number = $Number;
        }
    
        public function getComplement(){
            return $this->Complement;
        }
    
        public function setComplement($Complement){
            $this->Complement = $Complement;
        }
    
        public function getDistrict(){
            return $this->District;
        }
    
        public function setDistrict($District){
            $this->District = $District;
        }
    
        public function getCityName(){
            return $this->CityName;
        }
    
        public function setCityName($CityName){
            $this->CityName = $CityName;
        }
    
        public function getStateInitials(){
            return $this->StateInitials;
        }
    
        public function setStateInitials($StateInitials){
            $this->StateInitials = $StateInitials;
        }
    
        public function getCountryName(){
            return $this->CountryName;
        }
    
        public function setCountryName($CountryName){
            $this->CountryName = $CountryName;
        }
    
        public function getCity(){
            return $this->City;
        }
    
        public function setCity($City){
            $this->City = $City;
        }
    
        public function getState(){
            return $this->State;
        }
    
        public function setState($State){
            $this->State = $State;
        }
    
        public function getCountry(){
            return $this->Country;
        }
    
        public function setCountry($Country){
            $this->Country = $Country;
        }

        public function __construct($ZipCode,$Street,$Number,$Complement,$District,$StateInitials,$CityName,$CountryName)
        {
            $this->ZipCode = $ZipCode;
            $this->Street = $Street;  
            $this->Number = $Number;

            $this->Complement = $Complement;
            $this->District = $District;  
            $this->StateInitials = $StateInitials;

            $this->CityName = $CityName;
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
