<?php

namespace Safe2Pay\Test;

require_once '../vendor/autoload.php';

use Safe2Pay\API\AccountDepositRequest;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');
/**
 * Class AccountDepositTest
 *
 * @package Safe2Pay\Test
 */
class AccountDepositTest
{
    public static function GetBankAccount()
    {

        $response  = AccountDepositRequest::GetBankAccount();

        echo (json_encode($response));
    }

    public static function GetListDeposits()
    {
        $month = 5;
        $year = 2019;

        $response  = AccountDepositRequest::GetListDeposits($month,$year);

        echo (json_encode($response));
    }

    public static function GetListDetailsDeposits()
    {
        $day = 17;
        $month = 9;
        $year = 2019;
        $page = 1;
        $RowsPerPage = 100;

        $response  = AccountDepositRequest::GetListDetailsDeposits($day, $month,$year,$page,$RowsPerPage);

        echo (json_encode($response));
    }

    public static function GetTransferDetail()
    {
        $Id = 1049319;

        $response  = AccountDepositRequest::GetDepositDetail($Id);

        echo (json_encode($response));
    }

}

 //AccountDepositTest::GetBankAccount();
//AccountDepositTest::GetListDeposits();
//AccountDepositTest::GetListDetailsDeposits();
//AccountDepositTest::GetTransferDetail();
