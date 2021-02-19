<?php

namespace Safe2Pay\Test;


require_once '../vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\API\RefundType;
use Safe2Pay\Models\Payment\BankSlip;
use Safe2Pay\Models\Payment\Cryptocoin;
use Safe2Pay\Models\Payment\CreditCard;
use Safe2Pay\Models\Payment\DebitCard;
use Safe2Pay\Models\Payment\Carnet;
use Safe2Pay\Models\Payment\CarnetLot;
use Safe2Pay\Models\Payment\Pix;
use Safe2Pay\Models\Transactions\Splits;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\Models\Core\Config as Enviroment;
use Safe2Pay\Models\Payment\CarnetBankslip;

$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

/**
 * Class PaymentTest
 *
 * @package Safe2Pay\Test
 */
class PaymentTest
{
    public static function GetPaymentMethods()
    {
        $response = PaymentRequest::GetPaymentMethods();

        echo(json_encode($response));
    }

    //Boleto bancário
    public static function BankSlip()
    {
        //Inicializar método de pagamento
        $payload = new Transaction();
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
        // 6 - Pix
        $payload->setPaymentMethod("1");

        //Informa o objeto de pagamento
        $BankSlip = new BankSlip();
        //Data de vencimento
        $BankSlip->setDueDate("16/10/2019");
        //Instrução
        $BankSlip->setInstruction("Instrução de Exemplo");
        //Multa
        $BankSlip->setPenaltyRate(2.00);
        //Juros
        $BankSlip->setInterestRate(4.00);
        //Cancelar após o vencimento
        $BankSlip->setCancelAfterDue(false);
        //Pagamento parcial
        $BankSlip->setIsEnablePartialPayment(false);
        //Mensagens
        $BankSlip->setMessage(array(
            "mensagem 1",
            "mensagem 2",
            "mensagem 3"
        ));

        //Objeto de pagamento para boleto bancário
        $payload->setPaymentObject($BankSlip);

        $Products = array();

        for ($i = 0; $i < 10; $i++) {

            $payloadProduct = new Product();
            $payloadProduct->setCode($i + 1);
            $payloadProduct->setDescription("Produto " . ($i + 1));
            $payloadProduct->setUnitPrice(2.50);
            $payloadProduct->setQuantity(2);

            array_push($Products, $payloadProduct);
        };

        $payload->setProducts($Products);

        $split1 = new Splits();
        $split1->setIdReceiver(123);
        $split1->setName('Recebedor do split 1');
        $split1->setCodeReceiverType('1');
        $split1->setCodeTaxType('2');
        $split1->setAmount(50.00);
        $split1->setIsPayTax(false);

        $split2 = new Splits();
        $split2->setIdentity('99999999999');
        $split2->setName('Recebedor do split 2');
        $split2->setCodeReceiverType('2');
        $split2->setCodeTaxType('1');
        $split2->setAmount(100.00);
        $split2->setIsPayTax(true);

        $splits = array($split1, $split2);

        $payload->setSplits($splits);

        //Customer
        $Customer = new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");


        $payload->setCustomer($Customer);

        $response = PaymentRequest::CreatePayment($payload);

        echo(json_encode($response));
    }

    //Cartão de crédito
    public static function CreditCard()
    {

        //Inicializar método de pagamento
        $payload = new Transaction();
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
        // 6 - Pix
        $payload->setPaymentMethod("2");

        //Inicialização do cartão de crédito (Holder, CardNumber, ExpirationDate, SecurityCode, InstallmentQuantity
        //                                    , IsPreAuthorization, IsApplyInterest, InterestRate, SoftDescriptor)
        $CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2021", "241", 2, false, true, 2.32
                                     , "Teste");

        //Objeto de pagamento - para boleto bancário
        $payload->setPaymentObject($CreditCard);

        $Products = array();

        for ($i = 0; $i < 10; $i++) {

            $payloadProduct = new Product();
            $payloadProduct->setCode($i + 1);
            $payloadProduct->setDescription("Produto " . ($i + 1));
            $payloadProduct->setUnitPrice(2.50);
            $payloadProduct->setQuantity(2);

            array_push($Products, $payloadProduct);
        };

        $payload->setProducts($Products);


        //Customer
        $Customer = new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");


        $payload->setCustomer($Customer);

        $response = PaymentRequest::CreatePayment($payload);

        echo(json_encode($response));
    }

    //Criptomoedas
    public static function CryptoCurrency()
    {

        //Inicializar método de pagamento
        $payload = new Transaction();
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
        // 6 - Pix
        $payload->setPaymentMethod("3");

        $CryptoCoin = new Cryptocoin("LTC");

        //Objeto de pagamento - para Criptomoedas
        $payload->setPaymentObject($CryptoCoin);

        $Products = array();

        for ($i = 0; $i < 10; $i++) {

            $payloadProduct = new Product();
            $payloadProduct->setCode($i + 1);
            $payloadProduct->setDescription("Produto " . ($i + 1));
            $payloadProduct->setUnitPrice(2.50);
            $payloadProduct->setQuantity(2);

            array_push($Products, $payloadProduct);
        };

        $payload->setProducts($Products);

        //Customer
        $Customer = new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");


        $payload->setCustomer($Customer);

        $response = PaymentRequest::CreatePayment($payload);

        echo(json_encode($response));
    }

    //Cartão de débito
    public static function DebitCard()
    {
        //Inicializar método de pagamento
        $payload = new Transaction();
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
        // 6 - Pix
        $payload->setPaymentMethod("4");

        $DebitCard = new DebitCard("João da Silva", "4024007153763191", "12/2019", "241");

        //Objeto de pagamento - para boleto bancário
        $payload->setPaymentObject($DebitCard);

        $Products = array();

        for ($i = 0; $i < 10; $i++) {

            $payloadProduct = new Product();
            $payloadProduct->setCode($i + 1);
            $payloadProduct->setDescription("Produto " . ($i + 1));
            $payloadProduct->setUnitPrice(2.50);
            $payloadProduct->setQuantity(2);

            array_push($Products, $payloadProduct);
        };

        $payload->setProducts($Products);

        //Customer
        $Customer = new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");


        $payload->setCustomer($Customer);

        $response = PaymentRequest::CreatePayment($payload);

        echo(json_encode($response));
    }

    //Pix
    public static function Pix()
    {

        //Inicializar método de pagamento
        $payload = new Transaction();
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
        // 6 - Pix
        $payload->setPaymentMethod("6");

        $Products = array();

        for ($i = 0; $i < 10; $i++) {

            $payloadProduct = new Product();
            $payloadProduct->setCode($i + 1);
            $payloadProduct->setDescription("Produto " . ($i + 1));
            $payloadProduct->setUnitPrice(2.50);
            $payloadProduct->setQuantity(2);

            array_push($Products, $payloadProduct);
        };

        $payload->setProducts($Products);

        $Pix = new Pix(3600);

        //Objeto de pagamento - para PIX
        $payload->setPaymentObject($Pix);

        //Customer
        $Customer = new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");

        $payload->setCustomer($Customer);

        $response = PaymentRequest::CreatePayment($payload);

        echo(json_encode($response));
    }

    public static function Refund()
    {
        $Id = 1093075;
        $type = RefundType::BANKSLIP;
        // $type = RefundType::BANKSLIP;
        // $type = RefundType::DEBIT;

        $response = PaymentRequest::Refund($Id, $type);

        echo(json_encode($response));
    }

    //===========================================CARNET METHODS====================================================//

    public static function Carnet()
    {
        //Inicializar método de pagamento
        $payload = new Transaction();
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

        //Informa o objeto de pagamento
        $carnet = new Carnet();
        $carnet->setMessage("Teste");
        $carnet->setPenaltyAmount(10);
        $carnet->setInterestAmount(10);
        $carnet->setIsProcessed(false);
        $carnet->setIsAsync(false);
        $carnet->setIsEnablePartialPayment(false);
        $carnet->setPayableAfterDue(false);

        $bankslips = array();

        for ($i = 0; $i < 3; $i++) {
            $carnetBankslip = new CarnetBankslip();
            $carnetBankslip->setAmount(1.99);
            $carnetBankslip->setDueDate("2020-" . ($i + 1) . "-13");
            $carnetBankslip->setInstruction("Instrução de Exemplo");
            $carnetBankslip->setMessage = array(
                "mensagem 1",
                "mensagem 2",
                "mensagem 3",
            );

            array_push($bankslips, $carnetBankslip);
        }

        $carnet->setBankSlips($bankslips);

        //Objeto de pagamento - para boleto bancário - 1
        $payload->setPaymentObject($carnet);

        $Products = array();

        for ($i = 0; $i < 3; $i++) {

            $payloadProduct = new Product();
            $payloadProduct->setCode($i + 1);
            $payloadProduct->setDescription("Produto " . ($i + 1));
            $payloadProduct->setUnitPrice(2.50);
            $payloadProduct->setQuantity(2);

            array_push($Products, $payloadProduct);
        };

        $payload->setProducts($Products);

        //Customer
        $Customer = new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");


        $payload->setCustomer($Customer);

        $response = PaymentRequest::Carnet($payload);

        echo(json_encode($response));
    }

    public static function CarnetLot()
    {

        $lote = new CarnetLot();

        $lote->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

        $transactions = array();

        for ($x = 0; $x <= 10; $x++) {

            //Inicializar método de pagamento
            $payload = new Transaction();
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

            //Informa o objeto de pagamento
            $carnet = new Carnet();
            $carnet->setMessage("Teste");
            $carnet->setPenaltyAmount(10);
            $carnet->setInterestAmount(10);
            $carnet->setIsProcessed(false);
            $carnet->setIsAsync(false);
            $carnet->setIsEnablePartialPayment(false);
            $carnet->setPayableAfterDue(false);

            $bankslips = array();

            for ($i = 0; $i < 3; $i++) {
                $carnetBankslip = new CarnetBankslip();
                $carnetBankslip->setAmount(1.99);
                $carnetBankslip->setDueDate("2020-" . ($i + 1) . "-13");
                $carnetBankslip->setInstruction("Instrução de Exemplo");
                $carnetBankslip->setMessage = array(
                    "mensagem 1",
                    "mensagem 2",
                    "mensagem 3",
                );

                array_push($bankslips, $carnetBankslip);
            }

            $carnet->setBankSlips($bankslips);

            //Objeto de pagamento - para boleto bancário - 1
            $payload->setPaymentObject($carnet);

            $Products = array();

            for ($i = 0; $i < 3; $i++) {

                $payloadProduct = new Product();
                $payloadProduct->setCode($i + 1);
                $payloadProduct->setDescription("Produto " . ($i + 1));
                $payloadProduct->setUnitPrice(2.50);
                $payloadProduct->setQuantity(2);

                array_push($Products, $payloadProduct);
            };

            $payload->setProducts($Products);

            //Customer
            $Customer = new Customer();
            $Customer->setName("Teste Cliente");
            $Customer->setIdentity("01579286000174");
            $Customer->setEmail("Teste@Teste.com.br");
            $Customer->setPhone("51999999999");

            $Customer->Address = new Address();
            $Customer->Address->setZipCode("90620000");
            $Customer->Address->setStreet("Avenida Princesa Isabel");
            $Customer->Address->setNumber("828");
            $Customer->Address->setComplement("Lado B");
            $Customer->Address->setDistrict("Santana");
            $Customer->Address->setStateInitials("RS");
            $Customer->Address->setCityName("Porto Alegre");
            $Customer->Address->setCountryName("Brasil");
            $payload->setCustomer($Customer);

            array_push($transactions, $payload);
        }

        $lote->setItems($transactions);

        $response = PaymentRequest::CarnetLot($lote);

        echo(json_encode($response));
    }

    public static function GetCarnet()
    {
        $Identifier = "b46b36865edf44e0acd240057d858745";

        $response = PaymentRequest::GetCarnet($Identifier);

        echo(json_encode($response));
    }

    public static function GetCarnetAsync()
    {
        $Identifier = "cddb9c4cde4446ae91ba6a8dd157853e";

        $response = PaymentRequest::GetCarnetAsync($Identifier);

        echo(json_encode($response));
    }

    public static function ResendCarnet()
    {
        $Identifier = "4b9d8c72e9474f53910af6a27bf7000b";

        $response = PaymentRequest::ResendCarnet($Identifier);

        echo(json_encode($response));
    }

    public static function CancelCarnet()
    {
        $Identifier = "4b9d8c72e9474f53910af6a27bf7000b";

        $response = PaymentRequest::CancelCarnet($Identifier);

        echo(json_encode($response));
    }

    public static function CancelCarnetLot()
    {
        $Identifier = "cddb9c4cde4446ae91ba6a8dd157853e";

        $response = PaymentRequest::CancelCarnetLot($Identifier);

        echo(json_encode($response));
    }
}


//PaymentTest::GetPaymentMethods();
//PaymentTest::BankSlip();
//PaymentTest::CreditCard();
//PaymentTest::CryptoCurrency();
//PaymentTest::DebitCard();
//PaymentTest::Refund();
//PaymentTest::Carnet();
//PaymentTest::CarnetLot();
//PaymentTest::GetCarnet();
//PaymentTest::GetCarnetAsync();
//PaymentTest::ResendCarnet();
//PaymentTest::CancelCarnet();
//PaymentTest::CancelCarnetLot();
PaymentTest::Pix();