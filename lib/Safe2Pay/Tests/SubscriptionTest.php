<?php

namespace Safe2Pay\Test;

use Safe2Pay\Api\Subscription;
use Safe2Pay\Models\SubscriptionRequest;
use Safe2Pay\Models\Customer;
use Safe2Pay\Models\Address;

include_once(__DIR__ . '/../Models/Subscription/SubscriptionRequest.php');
include_once(__DIR__ . '/../Request/SubscriptionRequest.php');

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
        $payload->Plan = 68;
        $payload->IsSandbox = true;
        $payload->SubscriptionObject = ['TokenCard' => '4d8sa65d87sa8a87a5454d8911a'];
        $payload->Customer = new Customer('João da Silva', '31037942000178', 'safe2pay@safe2pay.com.br');
        $payload->Customer->Address = new Address('90670090', 'Logradouro', '123', null, 'Higienopolis', 'RS', 'Porto Alegre', 'Brasil');

        var_dump(json_encode($payload));

        var_dump(Subscription::Add($payload));
    }

    public static function Get()
    {
        var_dump(Subscription::Get(825));
    }
}


//SubscriptionTest::Get();

//SubscriptionTest::Add();
