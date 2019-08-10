<?php

namespace Test;


require_once '../vendor/autoload.php';

use Models\Payment\CreditCard as CreditCard;
use API\TokenizationRequest as TokenizationRequest;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

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

TokenizationTest::Create();
