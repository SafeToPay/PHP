<?php

namespace Test;

require_once __DIR__.'/../vendor/autoload.php';

use API\TransactionRequest;


/**
 * Class TransactionTest
 *
 * @package Safe2Pay\Test
 */
class TransactionTest
{

    public static function Get()
    { 
        $Id=535489;
        var_dump(json_encode(TransactionRequest::Get($Id)));

    }
}

// TransactionTest::Get();
