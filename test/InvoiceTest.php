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

        //Customer
        $Customer =  new Customer();
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


        $singleSale = new SingleSale();

        $singleSale->setCustomer($Customer);

        $singleSale->setPaymentMethods(
            (array(
                new SingleSalePaymentMethod("1"),
                new SingleSalePaymentMethod("2"),
                new SingleSalePaymentMethod("3"),
                new SingleSalePaymentMethod("4"),
            ))
        );

        $singleSale->setProducts(
            (array(
                new SingleSaleProduct(1, "teste", "1", "1.00"),
                new SingleSaleProduct(2, "teste", "1", "1.00"),
                new SingleSaleProduct(3, "teste", "1", "1.00"),
            ))
        );
        $singleSale->setMessages(
            array(
                "Message 1",
                "Message 2",
                "Message 3",
            )
        );

        //Lista de emails
        $singleSale->setEmails(
            (array(
                "lucas@safe2pay.com"
            ))
        );

        $singleSale->setCallbackUrl("https://safe2pay.com.br/api/Notify");

        $singleSale->setExpirationDate("2019-10-16");
        $singleSale->setDueDate("2019-10-16");
        $singleSale->setReference("teste");
        $singleSale->setPenaltyAmount("1.00");
        $singleSale->setInterestAmount("1.00");

        $response  = InvoiceRequest::Add($singleSale);

        echo (json_encode($response));
    }

    public static function Update()
    {

           //Customer
           $Customer =  new Customer();
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
   
   
           $singleSale = new SingleSale();
   
           $singleSale->setCustomer($Customer);
   
           $singleSale->setPaymentMethods(
               (array(
                   new SingleSalePaymentMethod("1"),
                   new SingleSalePaymentMethod("2"),
                   new SingleSalePaymentMethod("3"),
                   new SingleSalePaymentMethod("4"),
               ))
           );
   
           $singleSale->setProducts(
               (array(
                   new SingleSaleProduct(1, "teste", "1", "1.00"),
                   new SingleSaleProduct(2, "teste", "1", "1.00"),
                   new SingleSaleProduct(3, "teste", "1", "1.00"),
               ))
           );
           $singleSale->setMessages(
               array(
                   "Message 1",
                   "Message 2",
                   "Message 3",
               )
           );
   
           //Lista de emails
           $singleSale->setEmails(
               (array(
                   "lucas@safe2pay.com"
               ))
           );
   
           $singleSale->setCallbackUrl("https://safe2pay.com.br/api/Notify");
   
           $singleSale->setExpirationDate("2019-10-16");
           $singleSale->setDueDate("2019-10-16");
           $singleSale->setReference("teste");
           $singleSale->setPenaltyAmount("1.00");
           $singleSale->setInterestAmount("1.00");
           $singleSale->setSingleSaleHash("5f29ac6809d34e82bc1b97477261eaa0");
   
           $response  = InvoiceRequest::Update($singleSale);
   
           echo (json_encode($response));
    }

    public static function Cancel()
    {
        $hashSale = "9166d462f3c440c6adebff2f2fe82b35";

        $response  = InvoiceRequest::Cancel($hashSale);

        echo (json_encode($response));
    }

    public static function Get()
    {
        $hashSale = "5f29ac6809d34e82bc1b97477261eaa0";

        $response  = InvoiceRequest::Get($hashSale);

        echo (json_encode($response));
    }

    public static function Resend()
    {
        $hashSale = "5f29ac6809d34e82bc1b97477261eaa0";

        $response  = InvoiceRequest::Resend($hashSale);

        echo (json_encode($response));
    }
}

//InvoiceTest::Cancel();
//InvoiceTest::Get();
//InvoiceTest::Add();
//InvoiceTest::Update();
//InvoiceTest::Resend();
