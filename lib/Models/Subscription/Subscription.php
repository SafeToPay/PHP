<?php
namespace Safe2Pay\Models\Subscription;
/**
 * Class Subscription
 *
 * @package Safe2Pay\Models
 */
class Subscription implements \JsonSerializable
{
    public $Plan;
    public $PaymentMethod;
    public $Customer;
    public $IsSendSMS;
    public $IsSendEmail;
    public $Emails;
    public $IsSandbox;
    public $FirstChargeDate;
    public $Token;
    public $CreditCard;

    public function getPlan()
    {
        return $this->Plan;
    }

    public function setPlan($Plan)
    {
        $this->Plan = $Plan;
    }

    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    public function getCustomer()
    {
        return $this->Customer;
    }

    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
    }

    public function getIsSendSMS()
    {
        return $this->IsSendSMS;
    }

    public function setIsSendSMS($IsSendSMS)
    {
        $this->IsSendSMS = $IsSendSMS;
    }

    public function getIsSendEmail()
    {
        return $this->IsSendEmail;
    }

    public function setIsSendEmail($IsSendEmail)
    {
        $this->IsSendEmail = $IsSendEmail;
    }

    public function getEmails()
    {
        return $this->Emails;
    }

    public function setEmails($Emails)
    {
        $this->Emails = $Emails;
    }

    public function getIsSandbox()
    {
        return $this->IsSandbox;
    }

    public function setIsSandbox($IsSandbox)
    {
        $this->IsSandbox = $IsSandbox;
    }

    public function getFirstChargeDate()
    {
        return $this->FirstChargeDate;
    }

    public function setFirstChargeDate($FirstChargeDate)
    {
        $this->FirstChargeDate = $FirstChargeDate;
    }

    public function setToken($Token)
    {
        $this->Token = $Token;
    }

    public function setCreditCard($CreditCard)
    {
        $this->CreditCard = $CreditCard;
    }

    public function JsonSerialize()
    {
        return [
            'Plan' => $this->Plan,
            'PaymentMethod' => $this->PaymentMethod,
            'Customer' => $this->Customer,
            'IsSendSMS' => $this->IsSendSMS,
            'IsSendEmail' => $this->IsSendEmail,
            'Emails' => $this->Emails,
            'IsSandbox' => $this->IsSandbox,
            'FirstChargeDate' => $this->FirstChargeDate,
            'Token' => $this->Token,
            'CreditCard' => $this->CreditCard
        ];
    }
}

?>