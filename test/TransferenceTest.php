<?php

namespace Safe2Pay\Test;


require_once '../vendor/autoload.php';

use Safe2Pay\API\TransferenceRequest;
use Safe2Pay\Models\Transference\Transfer;
use Safe2Pay\Models\Transference\TransferRegister;
use Safe2Pay\Models\Bank\AccountType;
use Safe2Pay\Models\Bank\BankData;
use Safe2Pay\Models\Bank\Bank;

use Safe2Pay\Models\Core\Config as Enviroment;

$enviroment = new Enviroment();
$enviroment->setAPIKEY('5325F24FD8A0402D8BF6362C489C66F7');

/**
 * Class TransferenceTest
 *
 * @package Safe2Pay\Test
 */
class TransferenceTest
{
    public static function GetTransference()
    {
        $response = TransferenceRequest::GetTransference(478330);

        echo(json_encode($response));
    }

    public static function GetListLot()
    {
        $PageNumber = 1;
        $RowsPerPage = 10;

        $response = TransferenceRequest::GetListLot($PageNumber, $RowsPerPage);

        echo(json_encode($response));
    }

    public static function GetDetailLot()
    {
        $IdTransferRegisterLot = 1926;
        $PageNumber = 1;
        $RowsPerPage = 10;

        $response = TransferenceRequest::GetDetailLot($IdTransferRegisterLot, $PageNumber, $RowsPerPage);

        echo(json_encode($response));
    }

    //
    public static function CreateTransference()
    {
            $bankData = new BankData();
            $bankData->setBank(new Bank("041"));
            $bankData->setAccountType(new AccountType("CC"));
            $bankData->setBankAccount("1676");
            $bankData->setBankAccountDigit("0");
            $bankData->setBankAgency("41776");
            $bankData->setBankAgencyDigit("7");

        $transferRegisters = array (
            new TransferRegister("teste", 50.00, "95916839014", "teste", "2021-10-21", "urldeexemplo.com.br", $bankData),
            new TransferRegister("teste2", 50.00, "95916839014", "teste2", "2021-10-21", "urldeexemplo.com.br4", $bankData)
            );

        $payload = new Transfer(false, $transferRegisters);

        $response = TransferenceRequest::CreateTransference($payload);

        echo(json_encode($response));
    }
}
//TransferenceTest::GetTransference();
//TransferenceTest::GetListLot();
//TransferenceTest::GetDetailLot();
//TransferenceTest::CreateTransference();
?>