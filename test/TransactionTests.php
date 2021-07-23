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
        $Id = 8497120;

        $response = TransactionRequest::Get($Id);

        echo (json_encode($response));
    }


    public static function GetByReference()
    {
        $reference = '1059856';

        $response = TransactionRequest::GetByRefeference($reference);

        echo (json_encode($response));
    }

    //Listagem geral das transações
    public static function GetList()
    {
        //--------Obrigatórios:--------
        $pageNumber            = '1';
        $rowsPerPage           = '10';
        $isSandbox             = 'false';

        // --------Opcionais--------
        $createdDateInitial    = '2021-06-01';
        $createdDateEnd        = '2021-06-02';
        $paymentDateInitial    = '2021-06-02';
        $paymentDateEnd        = '2021-06-02';
        $Id                    =  0;
        $reference             = 'Teste SDK PHP';
        $customerName          = 'Joao da Silva';
        $customerIdentity      = '12345678910';
        $paymentMethodCode     = '1';
        $transactionStatusCode = '3';

        $response = TransactionRequest::List(
            $pageNumber,
            $rowsPerPage,
            $isSandbox,
            $createdDateInitial,
            $createdDateEnd,
            $paymentDateInitial,
            $paymentDateEnd,
            $Id,
            $reference,
            $customerName,
            $customerIdentity,
            $paymentMethodCode,
            $transactionStatusCode
        );

        //echo (json_encode($response));
    }
}

 //TransactionTest::Get();
 //TransactionTest::GetByReference();
 //TransactionTest::GetList();
