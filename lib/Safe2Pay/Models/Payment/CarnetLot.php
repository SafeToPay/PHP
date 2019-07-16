
<?php

namespace Safe2Pay\Models;

class CarnetLot
{
    private $Id;
    private $IdMerchant;
    private $Merchant;  
    private $JsonGzip;       
    private $Identifier;  
    private $CallbackUrl;  
    private $IsProcessed;
    private $CreatedDate;
    private $Items;  
    private $Carnets;       
    private $ApiVersion;   

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getIdMerchant(){
		return $this->IdMerchant;
	}

	public function setIdMerchant($IdMerchant){
		$this->IdMerchant = $IdMerchant;
	}

	public function getMerchant(){
		return $this->Merchant;
	}

	public function setMerchant($Merchant){
		$this->Merchant = $Merchant;
	}

	public function getJsonGzip(){
		return $this->JsonGzip;
	}

	public function setJsonGzip($JsonGzip){
		$this->JsonGzip = $JsonGzip;
	}

	public function getIdentifier(){
		return $this->Identifier;
	}

	public function setIdentifier($Identifier){
		$this->Identifier = $Identifier;
	}

	public function getCallbackUrl(){
		return $this->CallbackUrl;
	}

	public function setCallbackUrl($CallbackUrl){
		$this->CallbackUrl = $CallbackUrl;
	}

	public function getIsProcessed(){
		return $this->IsProcessed;
	}

	public function setIsProcessed($IsProcessed){
		$this->IsProcessed = $IsProcessed;
	}

	public function getCreatedDate(){
		return $this->CreatedDate;
	}

	public function setCreatedDate($CreatedDate){
		$this->CreatedDate = $CreatedDate;
	}

	public function getItems(){
		return $this->Items;
	}

	public function setItems($Items){
		$this->Items = $Items;
	}

	public function getCarnets(){
		return $this->Carnets;
	}

	public function setCarnets($Carnets){
		$this->Carnets = $Carnets;
	}

	public function getApiVersion(){
		return $this->ApiVersion;
	}

	public function setApiVersion($ApiVersion){
		$this->ApiVersion = $ApiVersion;
	}
}


?>