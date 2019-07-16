<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\DebitAccount;

include_once(__DIR__.'/../Request/DebitAccountRequest.php');

class DebitAccountTest
{

    public static function Get()
    {

        var_dump(DebitAccount::Get(8));
    }

    public static function Cancel()
    {
        var_dump(DebitAccount::Cancel(8));
    }
}

//DebitAccountTest::Get();
//DebitAccountTest::Cancel();
