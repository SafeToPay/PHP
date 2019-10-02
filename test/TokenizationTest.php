<?php

namespace Safe2Pay\Test;


require_once '../vendor/autoload.php';

use Safe2Pay\Models\Payment\CreditCard as CreditCard;
use Safe2Pay\API\TokenizationRequest as TokenizationRequest;

use Safe2Pay\Models\Core\Config as Enviroment;

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
        $CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2019", "241", null);
        //Realiza a tokenização e traz o retorno

        $response  = TokenizationRequest::Create($CreditCard);

        echo (json_encode($response));
    }
}

TokenizationTest::Create();
