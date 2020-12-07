<?php

namespace Safe2Pay\Test;

require_once '../vendor/autoload.php';

use Safe2Pay\API\TransactionRequest;

use Safe2Pay\Models\Core\Config as Enviroment;
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
        $Id=8497120;
       
        $response =TransactionRequest::Get($Id);

        echo (json_encode($response));

    }


    public static function GetByReference()
    { 
        $reference='1059856';
       
        $response = TransactionRequest::GetByRefeference($reference);

        echo (json_encode($response));
    }

}

 //TransactionTest::Get();
 //TransactionTest::GetByReference();
?>
