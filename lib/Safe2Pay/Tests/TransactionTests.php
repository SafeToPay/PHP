<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\Transaction;

include_once(__DIR__.'/../Request/TransactionRequest.php');

class TransactionTest
{

    public static function Get()
    { 
        var_dump(json_encode(Transaction::Get(82548)));

    }
}

TransactionTest::Get();
