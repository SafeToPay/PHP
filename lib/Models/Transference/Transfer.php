<?php

namespace Safe2Pay\Models\Transference;
/**
* Class TransferRegister
*
* @package Safe2Pay\Models
*/
class Transfer implements \JsonSerializable
{
	private $IsUseCheckingaccount;
	private $TransferRegisters;

	public function getIsUseCheckingaccount(){
		return $this->IsUseCheckingaccount;
	}
	
	public function setIsUseCheckingaccount($IsUseCheckingaccount){
		$this->IsUseCheckingaccount = $IsUseCheckingaccount;
	}
	public function getTransferRegisters(){
		return $this->IdMerchantRequester;
	}
	
	public function setTransferRegisters($TransferRegisters){
		$this->TransferRegisters = $TransferRegisters;
	}
	
	public function __construct($IsUseCheckingaccount,$TransferRegisters)
	{
		$this->IsUseCheckingaccount = $IsUseCheckingaccount;
		$this->TransferRegisters = $TransferRegisters;
	}
	
	public function JsonSerialize()
	{
		
		return [
			'IsUseCheckingaccount' =>(bool) $this->IsUseCheckingaccount,
			'TransferRegisters' => (array) $this->TransferRegisters
		];
	}
}
?>