<?php

namespace Safe2Pay\Models\Bank;

/**
 * Class BankData
 *
 * @package Safe2Pay\Models
 */
class BankData implements \JsonSerializable
{
    private $Bank;
    private $AccountType;
    private $BankAgency;
    private $BankAgencyDigit;
    private $BankAccount;
    private $BankAccountDigit;

    public function getBank()
    {
        return $this->Bank;
    }

    public function setBank($Bank)
    {
        $this->Bank = $Bank;
    }

    public function getAccountType()
    {
        return $this->AccountType;
    }

    public function setAccountType($AccountType)
    {
        $this->AccountType = $AccountType;
    }

    public function getBankAgency()
    {
        return $this->BankAgency;
    }

    public function setBankAgency($BankAgency)
    {
        $this->BankAgency = $BankAgency;
    }

    public function getBankAgencyDigit()
    {
        return $this->BankAgencyDigit;
    }

    public function setBankAgencyDigit($BankAgencyDigit)
    {
        $this->BankAgencyDigit = $BankAgencyDigit;
    }

    public function getBankAccount()
    {
        return $this->BankAccount;
    }

    public function setBankAccount($BankAccount)
    {
        $this->BankAccount = $BankAccount;
    }

    public function getBankAccountDigit()
    {
        return $this->BankAccountDigit;
    }

    public function setBankAccountDigit($BankAccountDigit)
    {
        $this->BankAccountDigit = $BankAccountDigit;
    }

    public function JsonSerialize()
    {
        return [
            'Bank' =>  $this->Bank,
            'AccountType' =>  $this->AccountType,
            'BankAgency' => (string) $this->BankAgency,
            'BankAgencyDigit' => (string) $this->BankAgencyDigit,
            'BankAccount' => (string) $this->BankAccount,
            'BankAccountDigit' => (string) $this->BankAccountDigit,
        ];
    }
}
