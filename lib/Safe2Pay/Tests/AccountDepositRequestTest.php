<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\AccountDeposit;

include_once(__DIR__.'/../Request/AccountDepositRequest.php');

class AccountDepositTest
{
    public static function GetBankAccount()
    {
        var_dump(AccountDeposit::GetBankAccount());
    }

    public static function List()
    {
        $CreatedDateInitial = "2019-07-01";
        $CreatedDateEnd = "2019-07-16";
        $PageNumber = 1;
        $RowsPerPage = 10;
        var_dump(AccountDeposit::List($CreatedDateInitial,$CreatedDateEnd,$PageNumber,$RowsPerPage));
    }

    public static function Detail()
    {
        var_dump(AccountDeposit::Detail(287891));
    }


}

//AccountDepositTest::GetBankAccount();
//AccountDepositTest::List();
//AccountDepositTest::Detail();
