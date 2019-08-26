<?php

namespace Safe2Pay\Test;

require_once '../vendor/autoload.php';

use Safe2Pay\Models\Merchant\Plan;
use Safe2Pay\Models\Merchant\PlanFrequence;
use Safe2Pay\API\PlanRequest;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

/**
 * Class PlanTest
 *
 * @package Safe2Pay\Test
 */
class PlanTest
{
    public static function Add()
    {
        $plan = new Plan();
        //Frequencia do plano
        // Code	Name
        // 1	Mensal
        // 2	Bimestral
        // 3	Trimestral
        // 4	Semestral
        // 5	Anual
        // 6	Semanal
        // 7	Diário
        $planFrequence = new  PlanFrequence();
        $planFrequence->setCode("1");

        $plan ->setPlanFrequence($planFrequence);
        $plan -> setName("Teste"); //Nome do plano
        $plan -> setDescription("Integração"); // Descrição do plano
        $plan -> setAmount("10.00"); // Valor do plano
        $plan -> setSubscriptionLimit("200"); // Limite de adesões
        $plan -> getDaysTrial(30); // Período de teste 
        $plan -> getDaysToInactive("2"); // Dias de inadimplência
        $plan -> setChargeDay("10"); // Dia de cobrança
        $plan -> setSubscriptionTax("20.00"); // Taxa de adesão
        $plan -> setIsProRata(true); //Cobrança Pro-Rata
        $plan -> setIsEnabled(true); //Ativado
        $plan -> setIsImmediateCharge(true); //Cobrar imediatamente
        $plan -> setCallbackUrl("https://webhook.site/251107e2-bdb1-480d-934c-bab0eb413318"); // URL de callback para notificação via Webhook
        $plan -> setExpirationDate("2019-08-10"); //Data de expiração do plano
    
        var_dump(json_encode($plan));

        var_dump(PlanRequest::Add($plan));
    }

    public static function Update()
    {
        $plan = new Plan();
        $plan->setId(156);
        //Frequencia do plano
        // Code	Name
        // 1	Mensal
        // 2	Bimestral
        // 3	Trimestral
        // 4	Semestral
        // 5	Anual
        // 6	Semanal
        // 7	Diário
        $planFrequence = new  PlanFrequence();
        $planFrequence->setCode("1");

        $plan ->setPlanFrequence($planFrequence);
        $plan -> setName("Teste"); //Nome do plano
        $plan -> setDescription("Integração"); // Descrição do plano
        $plan -> setAmount("10.00"); // Valor do plano
        $plan -> setSubscriptionLimit("200"); // Limite de adesões
        $plan -> getDaysTrial(30); // Período de teste 
        $plan -> getDaysToInactive("2"); // Dias de inadimplência
        $plan -> setChargeDay("10"); // Dia de cobrança
        $plan -> setSubscriptionTax("20.00"); // Taxa de adesão
        $plan -> setIsProRata(true); //Cobrança Pro-Rata
        $plan -> setIsEnabled(true); //Ativado
        $plan -> setIsImmediateCharge(true); //Cobrar imediatamente
        $plan -> setCallbackUrl("https://webhook.site/251107e2-bdb1-480d-934c-bab0eb413318"); // URL de callback para notificação via Webhook
        $plan -> setExpirationDate("2019-08-10"); //Data de expiração do plano
    
       var_dump(json_encode($plan));

        var_dump(PlanRequest::Update($plan));
    }

    public static function Get()
    {
        $Id = 156;
        var_dump(PlanRequest::Get($Id));
    }

    public static function List()
    {
        $PageNumber = 1;
        $RowsPage = 10;  
        var_dump(PlanRequest::List($PageNumber,$RowsPage));
    }
}

 PlanTest::Add();
 PlanTest::Get();
 PlanTest::Update();
 PlanTest::List();
