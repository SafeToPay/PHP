<?php

namespace Safe2Pay\Models\SingleSale;
/**
 * Class Transfer
 *
 * @package Safe2Pay\Models
 */
class Transfer
{
    private $Id;
    private $Sequence;
    private $Amount;
    private $CreatedDate;
    private $Filename;
    private $File;
    private $TransferRegister;
    
    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getSequence(){
		return $this->Sequence;
	}

	public function setSequence($Sequence){
		$this->Sequence = $Sequence;
	}

	public function getAmount(){
		return $this->Amount;
	}

	public function setAmount($Amount){
		$this->Amount = $Amount;
	}

	public function getCreatedDate(){
		return $this->CreatedDate;
	}

	public function setCreatedDate($CreatedDate){
		$this->CreatedDate = $CreatedDate;
	}

	public function getFilename(){
		return $this->Filename;
	}

	public function setFilename($Filename){
		$this->Filename = $Filename;
	}

	public function getFile(){
		return $this->File;
	}

	public function setFile($File){
		$this->File = $File;
	}

	public function getTransferRegister(){
		return $this->TransferRegister;
	}

	public function setTransferRegister($TransferRegister){
		$this->TransferRegister = $TransferRegister;
	}
}

?>