<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\Tokenization;
use Safe2Pay\Models\CreditCard;

include_once(__DIR__.'/../Models/Payment/CreditCard.php');
include_once(__DIR__.'/../Request/TokenizationRequest.php');

class TokenizationTest
{

    public static function Create()
    {

        $CreditCard = new CreditCard("João da Silva","4024007153763191","12/2019","241");  

        $response  =  Tokenization::Create($CreditCard);

        var_dump($response);

    }
}

TokenizationTest::Create();

