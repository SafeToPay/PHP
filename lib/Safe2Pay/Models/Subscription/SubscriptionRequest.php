<?php
namespace Safe2Pay\Models;
/**
 * Class SubscriptionRequest
 *
 * @package Safe2Pay\Models
 */
class SubscriptionRequest implements \JsonSerializable
{
    public $Plan;
    public $IsSandbox;
    public $ChargeDate;
    public $Customer;
    public $SubscriptionObject;

    public function getPlan()
    {
        return $this->Plan;
    }
    

    public function setPlan($Plan)
    {
        $this->Plan = $Plan;
    }

    public function getCustomer()
    {
        return $this->Customer;
    }

    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
    }

    public function getSubscriptionObject()
    {
        return $this->SubscriptionObject;
    }

    public function setSubscriptionObject($SubscriptionObject)
    {
        $this->SubscriptionObject = $SubscriptionObject;
    }

    public function JsonSerialize()
    {
        return [
            'Plan' => $this->Plan,
            'IsSandbox' => $this->IsSandbox,
            'Customer' => $this->Customer,
            'ChargeDate' => $this->ChargeDate,
            'SubscriptionObject' => $this->SubscriptionObject
        ];
    }
}

?>