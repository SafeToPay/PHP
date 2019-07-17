<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\TokenizationRequest;
use Safe2Pay\Models\CreditCard;

include_once(__DIR__.'/../Models/Payment/CreditCard.php');
include_once(__DIR__.'/../Request/TokenizationRequest.php');

/**
 * Class TokenizationTest
 *
 * @package Safe2Pay\Test
 */
class TokenizationTest
{

    public static function Create()
    {

        $CreditCard = new CreditCard("João da Silva","4024007153763191","12/2019","241");  

        $response  =  TokenizationRequest::Create($CreditCard);

        var_dump($response);

    }
}

//TokenizationTest::Create();

