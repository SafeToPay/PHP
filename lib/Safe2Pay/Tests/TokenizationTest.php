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
        //Cria uma instância do objeto do cartão para realizar a tokenização
        $CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2019", "241");
        //Realiza a tokenização e traz o retorno

        try {

            $response  =  TokenizationRequest::Create($CreditCard);

            var_dump($response);

        } catch (Exception $e) {

            echo  $e->getMessage();
        }
   
    }
}

//TokenizationTest::Create();
