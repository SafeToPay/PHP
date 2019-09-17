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
        var_dump(AccountDepositRequest::GetBankAccount());
    }

    public static function GetListDeposits()
    {
        $month = 5;
        $year = 2019;
        var_dump(AccountDepositRequest::GetListDeposits($month,$year));
    }

    public static function GetListDetailsDeposits()
    {
        $day = 17;
        $month = 9;
        $year = 2019;
        $page = 1;
        $RowsPerPage = 100;

        var_dump(AccountDepositRequest::GetListDetailsDeposits($day, $month,$year,$page,$RowsPerPage));
    }

}

 AccountDepositTest::GetBankAccount();
 AccountDepositTest::GetListDeposits();
 AccountDepositTest::GetListDetailsDeposits();
