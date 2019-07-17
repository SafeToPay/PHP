<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\TransactionRequest;

include_once(__DIR__.'/../Request/TransactionRequest.php');

/**
 * Class TransactionTest
 *
 * @package Safe2Pay\Test
 */
class TransactionTest
{

    public static function Get()
    { 
        var_dump(json_encode(TransactionRequest::Get(82548)));

    }
}

//TransactionTest::Get();
