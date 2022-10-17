<?php

namespace Safe2Pay\Test;

require_once '../vendor/autoload.php';

use Safe2Pay\API\PlanRequest;
use Safe2Pay\API\SubscriptionRequests;
use Safe2Pay\Models\Payment\CreditCard;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Address;
use Safe2Pay\Models\Plan\Plans as Plan;
use Safe2Pay\Models\Subscription\Subscription;

use Safe2Pay\Models\Core\Config as Enviroment;

$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

/**
 * Class RecurrenceTests
 *
 * @package Safe2Pay\Test
 */
class RecurrenceTests
{
    //   ----------------------- Plan Tests -----------------------

    public static function GetPlan()
    {
        $response = PlanRequest:: Get(13874);

        echo(json_encode($response));
    }

    public static function ListPlan()
    {
        $response = PlanRequest:: List("teste", true, 1, 10);

        echo(json_encode($response));
    }
    
    public static function AddPlan()
    {
        //Inicializar objeto
        $payload = new Plan();
        //Código da frequência para o plano.
        $payload->setPlanFrequence("1");
        //Nome do plano.
        $payload->setName("Teste SDK PHP");
        //Descrição do plano
        $payload->setDescription("Teste SDK PHP");
        //Valor cobrado a cada renovação do ciclo do plano.
        $payload->setAmount(10.00);
        //Limite de adesões que serão permitidas no plano.
        $payload->setSubscriptionLimit(100);
        //Dia da cobrança
        $payload->setChargeDay(5);
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");
        //Data de expiração
        $payload->setExpirationDate("2023-01-08");
        //Dia do vencimento
        $payload->setDaysDue(30);
        //Dias para inadimplência
        $payload->setDaysChurn(30);
        //Dias alerta inadimplência
        $payload->setDaysChurnAlert(30);
        //Dias alerta cobrança
        $payload->setDaysDelayAlert(30);
        //Se o plano permite cobrança após inadimplência
        $payload->setIsChargeOverdue(true);

        $response = PlanRequest::Add($payload);

        echo(json_encode($response));
    }

    public static function UpdatePlan()
    {
        //Inicializar objeto
        $payload = new Plan();
        //Código da frequência para o plano.
        $payload->setPlanFrequence("1");
        //Nome do plano.
        $payload->setName("Teste SDK PHP");
        //Descrição do plano
        $payload->setDescription("Teste SDK PHP");
        //Valor cobrado a cada renovação do ciclo do plano.
        $payload->setAmount(10.00);
        //Limite de adesões que serão permitidas no plano.
        $payload->setSubscriptionLimit(100);
        //Dia da cobrança
        $payload->setChargeDay(5);
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");
        //Data de expiração
        $payload->setExpirationDate("2023-01-08");
        //Dia do vencimento
        $payload->setDaysDue(30);
        //Dias para inadimplência
        $payload->setDaysChurn(30);
        //Dias alerta inadimplência
        $payload->setDaysChurnAlert(30);
        //Dias alerta cobrança
        $payload->setDaysDelayAlert(30);

        $response = PlanRequest::Add($payload);

        echo(json_encode($response));
    }

    public static function UpdateEnabled()
    {
        //Inicializar objeto
        $payload = new Plan();
        //Código do plano.
        $payload->setId(1234);
        //Informar se vai ativar ou desativar o plano.
        $payload->setIsEnabled(false);

        $response = PlanRequest::Add($payload);

        echo(json_encode($response));
    }

    //   ----------------------- Subscription Tests -----------------------

    public static function GetSubscription()
    {
        $response = SubscriptionRequests:: Get(39855);

        echo(json_encode($response));
    }

    public static function ListSubscriptions()
    {
        $response = SubscriptionRequests:: List(1, 10);

        echo(json_encode($response));
    }

    public static function AddSubscription()
    {
        //Inicializar objeto
        $payload = new Subscription();
        //Código identificador do plano.
        $payload->setPlan(14683);
        //Código do método de pagamento.
        $payload->setPaymentMethod("2");
        //Enviar SMS.
        $payload->setIsSendSMS(true);
        //Se deve ser enviado e-mail para o cliente. Serão usados apenas os e-mails da lista.
        $payload->setIsSendEmail(true);
        //Se a adesão deve ser gerada em ambiente de produção (falso) ou teste (verdadeiro).
        $payload->setIsSandbox(false);
        //Dia da primeira cobrança
        $payload->setFirstChargeDate("2022-03-03");
        //Token de identificação do cartão de crédito
        $payload->setToken("ba12bdf1o283y4nfabsvdfasoxut");

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

        //Lista de emails
        $payload->setEmails(
            (array(
                "gabriel@safe2pay.com"
            ))
        );

        $response = SubscriptionRequests::Add($payload);

        echo(json_encode($response));
    }

    public static function UpdateTokenCard()
    {
        //Inicialização do cartão de crédito
        $CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2021", "241", 2, false, true, 2.32
                                     , "Teste");
        
        //UpdateTokenCard(Dados do cartão OU cartão Tokenizado, Id da adesão)
        $response = SubscriptionRequests:: UpdateTokenCard($CreditCard, 41153);

        echo(json_encode($response));
    }

    public static function DeleteSubscription()
    {
        $Id = 41153;

        $response = SubscriptionRequests::Delete($Id);

        echo(json_encode($response));
    }

}


// RecurrenceTests::GetPlan();
// RecurrenceTests::ListPlan();
// RecurrenceTests::AddPlan();
// RecurrenceTests::UpdatePlan();

//  RecurrenceTests::GetSubscription();
// RecurrenceTests::ListSubscriptions();
// RecurrenceTests::AddSubscription();
//  RecurrenceTests::UpdateTokenCard();
// RecurrenceTests::DeleteSubscription();
?>