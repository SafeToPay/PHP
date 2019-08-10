<?php

namespace Test;

require_once '../vendor/autoload.php';

use API\TransactionRequest;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

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

 TransactionTest::Get();
?>