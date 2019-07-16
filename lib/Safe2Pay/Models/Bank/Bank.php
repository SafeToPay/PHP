<?php

namespace Safe2Pay\Models;

    class Bank implements \JsonSerializable{
        private $Id;
        private $Code;
        private $Name;


	function __fill($Id,$Code,$Name) {
		$this->Id = $Id;
		$this->Code = $Code;
		$this->Name = $Name;
    }

    function __construct($Code) {
		$this->Code = $Code;
	}
	
	function __fillByObject($Bank) {
		$this->Id = $Bank.getId();
		$this->Code = $Bank.getCode();
		$this->Name = $Bank.getName();
    }

    public function getId(){
	return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getCode(){
		return $this->Code;
	}

	public function setCode($Code){
		$this->Code = $Code;
	}

	public function getName(){
		return $this->Name;
	}

	public function setName($Name){
		$this->Name = $Name;
	}	

	public function JsonSerialize()
    {
        return [
                'Code' => (string) $this->Code
        ];
    }
}
