<?php

namespace Safe2Pay\Models\Payment;
/**
 * Class DebitAccount
 *
 * @package Safe2Pay\Models
 */
class DebitAccount
{
    private $Id;
    private $BankData;
    private $IsRecurring;  
    private $RecurringDayMonth;       
    private $DebitId;  
    private $DebitCode;  
    private $DueDate;     

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

	public function getBankData(){
		return $this->BankData;
	}

	public function setBankData($BankData){
		$this->BankData = $BankData;
	}

	public function getIsRecurring(){
		return $this->IsRecurring;
	}

	public function setIsRecurring($IsRecurring){
		$this->IsRecurring = $IsRecurring;
	}

	public function getRecurringDayMonth(){
		return $this->RecurringDayMonth;
	}

	public function setRecurringDayMonth($RecurringDayMonth){
		$this->RecurringDayMonth = $RecurringDayMonth;
	}

	public function getDebitId(){
		return $this->DebitId;
	}

	public function setDebitId($DebitId){
		$this->DebitId = $DebitId;
	}

	public function getDebitCode(){
		return $this->DebitCode;
	}

	public function setDebitCode($DebitCode){
		$this->DebitCode = $DebitCode;
	}

	public function getDueDate(){
		return $this->DueDate;
	}

	public function setDueDate($DueDate){
		$this->DueDate = $DueDate;
	}
}

?>