<?php

namespace Safe2Pay\Models;


class MerchantSplitTax implements \JsonSerializable
{
    private $TaxTypeName;
    private $TaxType;
    private $Tax;

    public function getTaxTypeName(){
		return $this->TaxTypeName;
	}

	public function setTaxTypeName($TaxTypeName){
		$this->TaxTypeName = $TaxTypeName;
	}

	public function getTaxType(){
		return $this->TaxType;
	}

	public function setTaxType($TaxType){
		$this->TaxType = $TaxType;
	}

	public function getTax(){
		return $this->Tax;
	}

	public function setTax($Tax){
		$this->Tax = $Tax;
	}

	public function __construct($TaxTypeName,$Tax)
	{
		$this->TaxTypeName = $TaxTypeName;
		$this->Tax = $Tax;
	}

	public function JsonSerialize()
    {
        return [
                'TaxTypeName' => (string) $this->TaxTypeName,
				'Tax' =>(string) $this->Tax
        ];
    }

}

?>