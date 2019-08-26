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
    private $BankAgency;
    private $BankAgencyDigit;
    private $BankAccount;
    private $BankAccountDigit;
    private $Operation;

    function __construct($Bank, $BankAgency, $BankAgencyDigit, $BankAccount, $BankAccountDigit, $Operation)
    {
        $this->Bank = $Bank;
        $this->BankAgency = $BankAgency;
        $this->BankAgencyDigit = $BankAgencyDigit;
        $this->BankAccount = $BankAccount;
        $this->BankAccountDigit = $BankAccountDigit;
        $this->Operation = $Operation;
    }

    public function getBank()
    {
        return $this->Bank;
    }

    public function setBank($Bank)
    {
        $this->Bank = $Bank;
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

    public function getOperation()
    {
        return $this->Operation;
    }

    public function setOperation($Operation)
    {
        $this->Operation = $Operation;
    }

    public function JsonSerialize()
    {
        return [
            'Bank' =>  $this->Bank,
            'BankAgency' => (string) $this->BankAgency,
            'BankAgencyDigit' => (string) $this->BankAgencyDigit,
            'BankAccount' => (string) $this->BankAccount,
            'BankAccountDigit' => (string) $this->BankAccountDigit,
            'Operation' => (string) $this->Operation
        ];
    }
}
