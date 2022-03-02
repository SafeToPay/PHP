<?php

namespace Safe2Pay\Models\Plan;

/**
 * Class Plans
 *
 * @package Safe2Pay\Models
 */
class Plans implements \JsonSerializable
{
    private $Id;
    private $PlanFrequence;
    private $Name;
    private $Description;
    private $Amount;
    private $SubscriptionLimit;
    private $ChargeDay;
    private $IsEnabled;
    private $CallbackUrl;
    private $ExpirationDate;
    private $DaysDue;
    private $DaysChurn;
    private $DaysChurnAlert;
    private $DaysDelayAlert;
    private $IsChargeOverdue;

    public function getId(){
		return $this->Id;
	}

	public function setId($Id){
		$this->Id = $Id;
	}

    public function getPlanFrequence(){
		return $this->PlanFrequence;
	}

	public function setPlanFrequence($PlanFrequence){
		$this->PlanFrequence = $PlanFrequence;
	}

	public function getName(){
		return $this->Name;
	}

	public function setName($Name){
		$this->Name = $Name;
	}

	public function getDescription(){
		return $this->Description;
	}

	public function setDescription($Description){
		$this->Description = $Description;
	}

	public function getAmount(){
		return $this->Amount;
	}

	public function setAmount($Amount){
		$this->Amount = $Amount;
	}

	public function getSubscriptionLimit(){
		return $this->SubscriptionLimit;
	}

	public function setSubscriptionLimit($SubscriptionLimit){
		$this->SubscriptionLimit = $SubscriptionLimit;
	}

	public function getChargeDay(){
		return $this->ChargeDay;
	}

	public function setChargeDay($ChargeDay){
		$this->ChargeDay = $ChargeDay;
	}

	public function getIsEnabled(){
		return $this->IsEnabled;
	}

	public function setIsEnabled($IsEnabled){
		$this->IsEnabled = $IsEnabled;
	}

	public function getCallbackUrl(){
		return $this->CallbackUrl;
	}

	public function setCallbackUrl($CallbackUrl){
		$this->CallbackUrl = $CallbackUrl;
	}

	public function getExpirationDate(){
		return $this->ExpirationDate;
	}

	public function setExpirationDate($ExpirationDate){
		$this->ExpirationDate = $ExpirationDate;
	}

    public function getDaysDue(){
		return $this->DaysDue;
	}

	public function setDaysDue($DaysDue){
		$this->DaysDue = $DaysDue;
	}

	public function getDaysChurn(){
		return $this->DaysChurn;
	}

	public function setDaysChurn($DaysChurn){
		$this->DaysChurn = $DaysChurn;
	}
	
	public function getDaysChurnAlert(){
		return $this->DaysChurnAlert;
	}
	
	public function setDaysChurnAlert($DaysChurnAlert){
		$this->DaysChurnAlert = $DaysChurnAlert;
	}
	
	public function getDaysDelayAlert(){
		return $this->DaysDelayAlert;
	}

	public function setDaysDelayAlert($DaysDelayAlert){
		$this->DaysDelayAlert = $DaysDelayAlert;
	}

	public function getIsChargeOverdue(){
		return $this->IsChargeOverdue;
	}

	public function setIsChargeOverdue($IsChargeOverdue){
		$this->IsChargeOverdue = $IsChargeOverdue;
	}

    public function JsonSerialize()
    {
        return [
                'Id' => (int)$this->Id,
				'PlanFrequence' => (string)$this->PlanFrequence,
				'Name' => (string) $this->Name,
				'Description' =>(string) $this->Description,
				'Amount' =>(double) $this->Amount,
				'SubscriptionLimit' =>(int) $this->SubscriptionLimit,
				'ChargeDay' =>(int)  $this->ChargeDay,
                'IsEnabled' => (bool) $this->IsEnabled,
                'CallbackUrl' =>(string) $this->CallbackUrl,
                'ExpirationDate' =>(string) $this->ExpirationDate,
                'DaysDue' =>(int) $this->DaysDue,
                'DaysChurn' =>(int) $this->DaysChurn,
                'DaysChurnAlert' =>(int) $this->DaysChurnAlert,
                'DaysDelayAlert' =>(int) $this->DaysDelayAlert,
                'IsChargeOverdue' =>(bool) $this->IsChargeOverdue
        ];
    }
}

?>