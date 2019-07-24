<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\Subscription;
use Safe2Pay\Models\SubscriptionRequest;
use Safe2Pay\Models\Customer;
use Safe2Pay\Models\Address;

include_once(__DIR__.'/../Models/General/Customer.php');
include_once(__DIR__.'/../Models/General/Address.php');
include_once(__DIR__.'/../Models/Subscription/SubscriptionRequest.php');
include_once(__DIR__.'/../Request/SubscriptionRequest.php');

/**
 * Class SubscriptionTest
 *
 * @package Safe2Pay\Test
 */
class SubscriptionTest
{
    public static function Add()
    {
        $payload = new SubscriptionRequest();
        $payload->ChargeDate = "2019-06-30";
        $payload->Plan = 68;
        $payload->IsSandbox = true;

        //Informe esse grupo caso a adesão seja por cartão de crédito
        // $payload->SubscriptionObject = [
        //     'TokenCard' => 'eb8a1d78-add8-46ab-ae33-9039d8429381'
        // ];

        //Caso a adesão seja débito em conta
        $payload->SubscriptionObject = [
            'Bank' => "033",
            'BankAccount' => '5432',
            'BankAccountDigit' => '1',
            'BankAgency' => '1234',
            'BankAgencyDigit' => '5',
        ];
        $payload->Customer = new Customer('João da Silva', '31037942000178', 'safe2pay@safe2pay.com.br');
        $payload->Customer->Address = new Address('90670090', 'Logradouro', '123', null, 'Higienopolis', 'RS', 'Porto Alegre', 'Brasil');

        var_dump(Subscription::Add($payload));
    }

    public static function Get()
    {
        $Id = 825;
        var_dump(Subscription::Get($Id));
    }
}


//SubscriptionTest::Get();

SubscriptionTest::Add();

phpinfo();