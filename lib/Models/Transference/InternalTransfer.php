<?php

namespace Safe2Pay\Models\Transference;

/**
 * Class TransferRegister
 *
 * @package Safe2Pay\Models
 */
class InternalTransfer implements \JsonSerializable
{
    protected $idReceiver;
    protected $IdentificationDebit;
    protected $IdentificationCredit;
    protected $Amount;

    public function __construct($idReceiver, $IdentificationDebit, $IdentificationCredit, $Amount)
    {
        $this->idReceiver = $idReceiver;
        $this->IdentificationDebit = $IdentificationDebit;
        $this->IdentificationCredit = $IdentificationCredit;
        $this->Amount = $Amount;
    }

    public function JsonSerialize()
    {

        return [
            'idReceiver' => $this->idReceiver,
            'IdentificationDebit' => $this->IdentificationDebit,
            'IdentificationCredit' => $this->IdentificationCredit,
            'Amount' => $this->Amount,
        ];
    }
}
