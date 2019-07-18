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
        $Id = 8;

        var_dump(DebitAccountRequest::Get( $Id));
    }

    public static function Cancel()
    {
        $Id = 8;

        var_dump(DebitAccountRequest::Cancel($Id));
    }
}

//DebitAccountTest::Get();
//DebitAccountTest::Cancel();
