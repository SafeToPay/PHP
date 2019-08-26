<?php

namespace Safe2Pay\Test;

require_once '../vendor/autoload.php';

use Safe2Pay\API\InvoiceRequest;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Address;
use Safe2Pay\Models\SingleSale\SingleSale;
use Safe2Pay\Models\SingleSale\SingleSaleProduct;
use Safe2Pay\Models\SingleSale\SingleSalePaymentMethod;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

/**
 * Class InvoiceTest
 *
 * @package Safe2Pay\Test
 */
class InvoiceTest
{

    public static function Add()
    {
      
         //Dados do cliente
         $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
         //Dados do endereço do cliente
         $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));
 
         //Lista de produtos incluídos na cobrança
         $Products = (array(
            new SingleSaleProduct(1, "teste", "1", "1.00"),
        ));

          //Lista de formas de pagamento aceitas
          $PaymentMethod = (array(
            new SingleSalePaymentMethod("1"),
            new SingleSalePaymentMethod("2"),
            new SingleSalePaymentMethod("3"),
            new SingleSalePaymentMethod("4"),
        ));

         //Lista de mensagens na cobrança
         $Messages = (array(
            "Message 1"
        ));

        //Lista de emails
        $Emails = (array(
            "lucas@safe2pay.com"
        ));

        
        $singleSale = new SingleSale
        (
            $Customer,
            $Products,
            "2019-08-16",
            $PaymentMethod,
            "2019-08-16",
            "teste",
            "1.00",
            "1.00",
            $Emails,
            $Messages,
            "Teste"
        );

        $singleSale->setCallbackUrl("https://safe2pay.com.br/api/Notify");

         var_dump(json_encode($singleSale));
         var_dump(InvoiceRequest::Add($singleSale));

    }

    public static function Update()
    {
      
         //Dados do cliente
         $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");
         //Dados do endereço do cliente
         $Customer->setAddress(new Address("90620000", "Avenida Princesa Isabel", "828", null, "Santana", "RS", "Porto Alegre", "Brasil"));
 
         //Lista de produtos incluídos na cobrança
         $Products = (array(
            new SingleSaleProduct(1, "teste", "1", "1.00"),
        ));

          //Lista de formas de pagamento aceitas
          $PaymentMethod = (array(
            new SingleSalePaymentMethod("1"),
            new SingleSalePaymentMethod("2"),
            new SingleSalePaymentMethod("3"),
            new SingleSalePaymentMethod("4"),
        ));

         //Lista de mensagens na cobrança
         $Messages = (array(
            "Message 1"
        ));

        //Lista de emails
        $Emails = (array(
            "lucas@safe2pay.com"
        ));

        
        $singleSale = new SingleSale
        (
            $Customer,
            $Products,
            "2019-08-16",
            $PaymentMethod,
            "2019-08-16",
            "teste",
            "1.00",
            "1.00",
            $Emails,
            $Messages,
            "Teste"
        );

        //Necessário para atualizar a cobrança
        $singleSale->setSingleSaleHash("9166d462f3c440c6adebff2f2fe82b35");

         var_dump(json_encode($singleSale));
         var_dump(InvoiceRequest::Update($singleSale));

    }

    public static function Cancel()
    {
        $hashSale = "337b62a77c514f26be8fd33d5fdb619e";
        var_dump(InvoiceRequest::Cancel($hashSale));
    }

    public static function Get()
    {
        $hashSale = "9166d462f3c440c6adebff2f2fe82b35";
        var_dump(InvoiceRequest::Get($hashSale));
    }

    public static function Resend()
    {
        $hashSale = "9166d462f3c440c6adebff2f2fe82b35";
        var_dump(InvoiceRequest::Resend($hashSale));
    }
}

 InvoiceTest::Cancel();
 InvoiceTest::Get();
 InvoiceTest::Add();
 InvoiceTest::Update();
 InvoiceTest::Resend();
