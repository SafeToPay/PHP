<?php
namespace Safe2Pay\Models;

use Safe2Pay\Models\Customer;
use Safe2Pay\Core\Config;
use JsonSerializable;

include_once(__DIR__.'/../../Core/Config.php');
include_once(__DIR__.'/../General/Customer.php');


class SubscriptionRequest implements JsonSerializable
{
    public $Plan;
    public $IsSandbox;
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
            'SubscriptionObject' => $this->SubscriptionObject
        ];
    }
}

?>