<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\AccountDepositRequest;

include_once(__DIR__.'/../Request/AccountDepositRequest.php');

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
        var_dump(AccountDepositRequest::Detail(287891));
    }


}

//AccountDepositTest::GetBankAccount();
//AccountDepositTest::List();
//AccountDepositTest::Detail();
