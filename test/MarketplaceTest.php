<?php

namespace Safe2Pay\Test;

require_once '../vendor/autoload.php';

use Safe2Pay\API\MarketplaceRequest;
use Safe2Pay\Models\Bank\AccountType;
use Safe2Pay\Models\General\Address;
use Safe2Pay\Models\Bank\Bank;
use Safe2Pay\Models\Bank\BankData;
use Safe2Pay\Models\Merchant\Merchant;
use Safe2Pay\Models\Merchant\MerchantSplit;
use Safe2Pay\Models\Merchant\MerchantSplitTax;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

/**
 * Class MarketplaceTest
 *
 * @package Safe2Pay\Test
 */
class MarketplaceTest
{

    public static function Add()
    {

        $Merchant = new Merchant();
        $Merchant->setIdentity("72618919000154");
        $Merchant->setName("Francisco e Laís Filmagens ME");
        $Merchant->setCommercialName("Empresa Teste");
        $Merchant->setIsPanelRestricted(false);
        //Dados do responsável 
        $Merchant->setResponsibleIdentity("04270435062");
        $Merchant->setResponsibleName("Lucas");
        $Merchant->setEmail("4ba9b0275sdf79f@HOTMasdfasdf.com");
        //Dados do responsável técnico
        $Merchant->setTechIdentity("32001774117");
        $Merchant->setTechName("Responsável técnico");
        $Merchant->setTechEmail("4ba9beeeee02757sdfg9f@tedfgdfgste.cdfgom");

        //Endereço
        $Merchant->Address = new Address();
        $Merchant->Address->setZipCode("90620000");
        $Merchant->Address->setStreet("Avenida Princesa Isabel");
        $Merchant->Address->setNumber("828");
        $Merchant->Address->setComplement("Lado B");
        $Merchant->Address->setDistrict("Santana");
        $Merchant->Address->setStateInitials("RS");
        $Merchant->Address->setCityName("Porto Alegre");
        $Merchant->Address->setCountryName("Brasil");

        
        $bankData = new BankData();
        $bankData->setBank(new Bank("041"));
        $bankData->setAccountType(new AccountType("CC"));
        $bankData->setBankAccount("1676");
        $bankData->setBankAccountDigit("0");
        $bankData->setBankAgency("41776");
        $bankData->setBankAgencyDigit("7");
        //Split de taxas
        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        $merchantSplit =  array(
            new MerchantSplit(false,"1",array(new MerchantSplitTax("1","1.00"))),
            new MerchantSplit(false,"2",array(new MerchantSplitTax("1","1.75"))),
            new MerchantSplit(false,"3",array(new MerchantSplitTax("1","1.50"))),
            new MerchantSplit(false,"4",array(new MerchantSplitTax("1","1.50"))),
        ); 


        $Merchant->setBankData($bankData);
        $Merchant->setMerchantSplit($merchantSplit);

        $response  = MarketplaceRequest::Add($Merchant);

        echo (json_encode($response));
    }

    public static function Update()
    {
       
        $Merchant = new Merchant();
        $Merchant->setId(5280);
        $Merchant->setIdentity("53797700000115");
        $Merchant->setName("Francisco e Laís Filmagens ME");
        $Merchant->setCommercialName("Empresa Teste");
        //Dados do responsável 
        $Merchant->setResponsibleIdentity("04270435062");
        $Merchant->setResponsibleName("Lucas");
        $Merchant->setEmail("4ba9b029f@HOTMAIL.COM");
        //Dados do responsável técnico
        $Merchant->setTechIdentity("32001774117");
        $Merchant->setTechName("Responsável técnico");
        $Merchant->setTechEmail("Teste12@teste.com");

        //Endereço
        $Merchant->Address = new Address();
        $Merchant->Address->setZipCode("90620000");
        $Merchant->Address->setStreet("Avenida Princesa Isabel");
        $Merchant->Address->setNumber("828");
        $Merchant->Address->setComplement("Lado B");
        $Merchant->Address->setDistrict("Santana");
        $Merchant->Address->setStateInitials("RS");
        $Merchant->Address->setCityName("Porto Alegre");
        $Merchant->Address->setCountryName("Brasil");

        
        $bankData = new BankData();
        $bankData->setBank(new Bank("041"));
        $bankData->setBankAccount("1676");
        $bankData->setBankAccountDigit("0");
        $bankData->setBankAgency("41776");
        $bankData->setBankAgencyDigit("7");
        $bankData->setOperation("3");

        //Split de taxas
        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        $merchantSplit =  array(
            new MerchantSplit(false,"1",array(new MerchantSplitTax("1","1.00"))),
            new MerchantSplit(false,"2",array(new MerchantSplitTax("1","1.75"))),
            new MerchantSplit(false,"3",array(new MerchantSplitTax("1","1.50"))),
            new MerchantSplit(false,"4",array(new MerchantSplitTax("1","1.50"))),
        ); 


        $Merchant->setBankData($bankData);
        $Merchant->setMerchantSplit($merchantSplit);

        $response  = MarketplaceRequest::Update($Merchant);

        echo (json_encode($response));
    }

    public static function Delete()
    {
        $Id = 4354;
        $response  = MarketplaceRequest::Delete($Id);

        echo (json_encode($response));
    }

    public static function List()
    {
        $PageNumber = 1;
        $RowsPage = 10;

        $response  = MarketplaceRequest::List($PageNumber,$RowsPage);

        echo (json_encode($response));
    }

    public static function Get()
    {
        $Id = 4346;

        $response  = MarketplaceRequest::Get($Id);

        echo (json_encode($response));
    }
}

 //MarketplaceTest::Get();
 //MarketplaceTest::List();
 //MarketplaceTest::Delete();
//MarketplaceTest::Add();
//MarketplaceTest::Update();
