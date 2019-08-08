<?php

namespace Test;

require_once __DIR__.'/../vendor/autoload.php';

use Models\Payment\CreditCard;
use API\TokenizationRequest;

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

            $response  = TokenizationRequest::Create($CreditCard);

            var_dump($response);

        } catch (Exception $e) {

            echo  $e->getMessage();
        }
   
    }
}

// TokenizationTest::Create();
