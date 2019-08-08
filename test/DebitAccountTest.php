<?php

namespace Test;

require_once __DIR__.'/../vendor/autoload.php';

use API\DebitAccountRequest;



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

// DebitAccountTest::Get();
// DebitAccountTest::Cancel();
