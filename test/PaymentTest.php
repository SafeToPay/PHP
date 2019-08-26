<?php

namespace Safe2Pay\Test;


require_once '../vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\Models\Payment\BankSlip;
use Safe2Pay\Models\Payment\CreditCard;
use Safe2Pay\Models\Payment\DebitCard;
use Safe2Pay\Models\Payment\Carnet;
use Safe2Pay\Models\Payment\CarnetLot;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\Models\Core\Config as Enviroment;
use Safe2Pay\Models\Payment\CarnetBankslip;

$enviroment = new Enviroment();
$enviroment->setAPIKEY('5A3A044DE838403F9566BDFBEE9DE763');
/**
 * Class PaymentTest
 *
 * @package Safe2Pay\Test
 */
class PaymentTest
{
    public static function GetPaymentMethods()
    {
        var_dump(PaymentRequest::GetPaymentMethods());
    }

    //Boleto bancário
    public static function BankSlip()
    {
        //Inicializar método de pagamento
        $payload  = new Transaction();
        //Ambiente de homologação
        $payload->setIsSandbox(true);
        //Descrição geral 
        $payload->setApplication("Teste SDK PHP");
        //Nome do vendedor
        $payload->setVendor("João da Silva");
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        // 10 - Débito em conta 
        $payload->setPaymentMethod("1");

        //Informa o objeto de pagamento

        //Objeto de pagamento - para boleto bancário
        $payload->setPaymentObject(new BankSlip("16/07/2019", false, false, 2.00, 0.40, "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3")));


        //Lista de produtos incluídos na cobrança
        $payload->setProducts(array(
            new Product("001", "Teste 1", 10, 1.99),
            new Product("002", "Teste 2", 3, 2.50),
            new Product("003", "Teste 3", 7, 1)
        ));

        //Dados do cliente
        $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
        //Dados do endereço do cliente
        $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));


        $payload->setCustomer($Customer);

        try {

            var_dump(PaymentRequest::BankSlip($payload));
        } catch (Exception $e) {

            echo  $e->getMessage();
        }
    }

    //Cartão de crédito
    public static function CreditCard()
    {

        //Inicializar método de pagamento
        $payload  = new Transaction();
        //Ambiente de homologação
        $payload->setIsSandbox(true);
        //Descrição geral 
        $payload->setApplication("Teste SDK PHP");
        //Nome do vendedor
        $payload->setVendor("João da Silva");
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        // 10 - Débito em conta 
        $payload->setPaymentMethod("2");

        //Informa o objeto de pagamento
        $payload->setPaymentObject(new CreditCard("João da Silva", "4024007153763191", "12/2019", "241"));

        //$payload->setPaymentObject(CreditCard::__Tokenized("841541584185418514851414965941851"));

        //Lista de produtos incluídos na cobrança
        $payload->setProducts(array(
            new Product("001", "Teste 1", 10, 1.99),
            new Product("002", "Teste 2", 3, 2.50),
            new Product("003", "Teste 3", 7, 1)
        ));

        //Dados do cliente
        $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
        //Dados do endereço do cliente
        $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));


        $payload->setCustomer($Customer);

        var_dump(PaymentRequest::CreditCard($payload));
    }

    //Criptomoedas (Bitcoin)
    public static function CryptoCurrency()
    {
        //Inicializar método de pagamento
        $payload  = new Transaction();
        //Ambiente de homologação
        $payload->setIsSandbox(true);
        //Descrição geral 
        $payload->setApplication("Teste SDK PHP");
        //Nome do vendedor
        $payload->setVendor("João da Silva");
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        // 10 - Débito em conta 
        $payload->setPaymentMethod("3");

        //Lista de produtos incluídos na cobrança
        $payload->setProducts(array(
            new Product("001", "Teste 1", 10, 1.99),
            new Product("002", "Teste 2", 3, 2.50),
            new Product("003", "Teste 3", 7, 1)
        ));

        //Dados do cliente
        $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
        //Dados do endereço do cliente
        $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));


        $payload->setCustomer($Customer);

        var_dump(PaymentRequest::CryptoCurrency($payload));
    }

    //Cartão de débito
    public static function DebitCard()
    {
        //Inicializar método de pagamento
        $payload  = new Transaction();
        //Ambiente de homologação
        $payload->setIsSandbox(true);
        //Descrição geral 
        $payload->setApplication("Teste SDK PHP");
        //Nome do vendedor
        $payload->setVendor("João da Silva");
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        // 10 - Débito em conta 
        $payload->setPaymentMethod("4");

        //Informa o objeto de pagamento

        //Objeto de pagamento - para boleto bancário - 1
        $payload->setPaymentObject(new DebitCard("João da Silva", "4024007153763191", "12/2019", "241"));


        //Lista de produtos incluídos na cobrança
        $payload->setProducts(array(
            new Product("001", "Teste 1", 10, 1.99),
            new Product("002", "Teste 2", 3, 2.50),
            new Product("003", "Teste 3", 7, 1)
        ));

        //Dados do cliente
        $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
        //Dados do endereço do cliente
        $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));


        $payload->setCustomer($Customer);

        var_dump(PaymentRequest::DebitCard($payload));
    }

    public static function Carnet()
    {
        //Inicializar método de pagamento
        $payload  = new Transaction();
        //Ambiente de homologação
        $payload->setIsSandbox(true);
        //Descrição geral 
        $payload->setApplication("Teste SDK PHP");
        //Nome do vendedor
        $payload->setVendor("João da Silva");
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        // 10 - Débito em conta 
        $payload->setPaymentMethod("1");

        //Informa o objeto de pagamento
        $carnet = new Carnet();
        $carnet->setMessage("Teste");
        $carnet->setPenaltyAmount(10);
        $carnet->setInterestAmount(10);
        $carnet->setIsProcessed(false);
        $carnet->setIsAsync(false);
        $carnet->setIsEnablePartialPayment(false);
        $carnet->setPayableAfterDue(false);

        $carnet->setBankSlips(array(
            new CarnetBankslip(1.99, "2019-09-13", "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3")),
            new CarnetBankslip(1.99, "2019-09-13", "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3")),
            new CarnetBankslip(1.99, "2019-09-13", "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3"))
        ));



        //Objeto de pagamento - para boleto bancário - 1
        $payload->setPaymentObject($carnet);


        //Lista de produtos incluídos na cobrança
        $payload->setProducts(array(
            new Product("001", "Teste 1", 10, 1.99),
            new Product("002", "Teste 2", 3, 2.50),
            new Product("003", "Teste 3", 7, 1)
        ));

        //Dados do cliente
        $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
        //Dados do endereço do cliente
        $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));


        $payload->setCustomer($Customer);

        var_dump(PaymentRequest::Carnet($payload));
    }

    public static function CarnetLot()
    {

        $lote  = new CarnetLot();

        $lote->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        $transactions =  array();

        for ($x = 0; $x <= 10; $x++) {

            //Inicializar método de pagamento
            $payload  = new Transaction();
            //Ambiente de homologação
            $payload->setIsSandbox(true);
            //Descrição geral 
            $payload->setApplication("Teste SDK PHP");
            //Nome do vendedor
            $payload->setVendor("João da Silva");

            //Código da forma de pagamento
            // 1 - Boleto bancário
            // 2 - Cartão de crédito
            // 3 - Criptomoeda
            // 4 - Cartão de débito 
            // 10 - Débito em conta 
            $payload->setPaymentMethod("1");

            //Informa o objeto de pagamento
            $carnet = new Carnet();
            $carnet->setMessage("Teste");
            $carnet->setPenaltyAmount(10);
            $carnet->setInterestAmount(10);
            $carnet->setIsProcessed(false);
            $carnet->setIsAsync(false);
            $carnet->setIsEnablePartialPayment(false);
            $carnet->setPayableAfterDue(false);

            $carnet->setBankSlips(array(
                new CarnetBankslip(1.99, "2019-09-13", "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3")),
                new CarnetBankslip(1.99, "2019-09-13", "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3")),
                new CarnetBankslip(1.99, "2019-09-13", "Instrução de Exemplo", array("mensagem 1", "mensagem 2", "mensagem 3"))
            ));



            //Objeto de pagamento - para boleto bancário - 1
            $payload->setPaymentObject($carnet);


            //Lista de produtos incluídos na cobrança
            $payload->setProducts(array(
                new Product("001", "Teste 1", 10, 1.99),
                new Product("002", "Teste 2", 3, 2.50),
                new Product("003", "Teste 3", 7, 1)
            ));

            //Dados do cliente
            $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
            //Dados do endereço do cliente
            $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));


            $payload->setCustomer($Customer);

            array_push($transactions, $payload);
        }

        $lote->setItems($transactions);


        var_dump(PaymentRequest::CarnetLot($payload));
    }

    public static function Refund()
    {
        var_dump(PaymentRequest::Refund(516396));
    }
}


//  PaymentTest::GetPaymentMethods();
//  PaymentTest::BankSlip();
//  PaymentTest::CreditCard();
//  PaymentTest::CryptoCurrency();
//  PaymentTest::DebitCard();
//  PaymentTest::Refund();
//  PaymentTest::Carnet();
//  PaymentTest::CarnetLot();
