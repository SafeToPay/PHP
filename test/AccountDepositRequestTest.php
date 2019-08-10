<?php

namespace Test;

require_once '../vendor/autoload.php';

use API\AccountDepositRequest;

use Models\Core\Config as Enviroment;
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

    public static function List()
    {
        $CreatedDateInitial = "2019-07-01";
        $CreatedDateEnd = "2019-07-16";
        $PageNumber = 1;
        $RowsPerPage = 10;
        var_dump(AccountDepositRequest::List($CreatedDateInitial,$CreatedDateEnd,$PageNumber,$RowsPerPage));
    }

    public static function Detail()
    {
        $Id = 287891;

        var_dump(AccountDepositRequest::Detail($Id));
    }

}

 AccountDepositTest::GetBankAccount();
 AccountDepositTest::List();
 AccountDepositTest::Detail();
