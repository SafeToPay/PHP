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
        $CreditCard = new CreditCard("João da Silva", "4444 3333 2222 1111", "12/2021", "241", null, false);
        //Realiza a tokenização e traz o retorno

        $response  = TokenizationRequest::Create($CreditCard);

        echo (json_encode($response));
    }
    public static function GetListToken(){

         $pageNumber = 1;
         $rowsPerPage = 5;

        $response = TokenizationRequest::ListToken($pageNumber, $rowsPerPage);

        echo (json_encode($response));
    }
}

//TokenizationTest::Create();
//TokenizationTest::GetListToken();
