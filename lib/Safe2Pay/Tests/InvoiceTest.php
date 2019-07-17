<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\InvoiceRequest;
use Safe2Pay\Models\SingleSale;
use Safe2Pay\Models\Customer;
use Safe2Pay\Models\Address;
use Safe2Pay\Models\SingleSaleProduct;
use Safe2Pay\Models\SingleSalePaymentMethod;

include_once(__DIR__.'/../Models/General/Customer.php');
include_once(__DIR__.'/../Models/General/Address.php');
include_once(__DIR__.'/../Models/SingleSale/SingleSaleProduct.php');
include_once(__DIR__.'/../Request/InvoiceRequest.php');
include_once(__DIR__.'/../Models/SingleSale/SingleSale.php');
include_once(__DIR__.'/../Models/SingleSale/SingleSalePaymentMethod.php');

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
         $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br", null);
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
            "2019-07-16",
            $PaymentMethod,
            "2019-07-16",
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
         $Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br", null);
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
            "2019-07-16",
            $PaymentMethod,
            "2019-07-16",
            "teste",
            "1.00",
            "1.00",
            $Emails,
            $Messages,
            "Teste"
        );

        //Necessário para atualizar a cobrança
        $singleSale->setSingleSaleHash("337b62a77c514f26be8fd33d5fdb619e");

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
        $hashSale = "337b62a77c514f26be8fd33d5fdb619e";
        var_dump(InvoiceRequest::Get($hashSale));
    }
}

//InvoiceTest::Cancel();
//InvoiceTest::Get();
//InvoiceTest::Add();
InvoiceTest::Update();
