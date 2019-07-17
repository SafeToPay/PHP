<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\DebitAccountRequest;

include_once(__DIR__.'/../Request/DebitAccountRequest.php');

/**
 * Class DebitAccountTest
 *
 * @package Safe2Pay\Api
 */
class DebitAccountTest
{

    public static function Get()
    {

        var_dump(DebitAccountRequest::Get(8));
    }

    public static function Cancel()
    {
        var_dump(DebitAccountRequest::Cancel(8));
    }
}

//DebitAccountTest::Get();
//DebitAccountTest::Cancel();
