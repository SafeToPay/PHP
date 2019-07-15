<?php

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');
include_once('../Models/Subscription/SubscriptionRequest.php');


class Subscription{


    public static function Add($data){

        $request = Client:: HttpClient('POST','v2/subscription', json_encode($data), false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    public static function Get($Id){

        $request = Client:: HttpClient('GET','v2/subscription/get?id='.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 

    }

}


//Teste Buscar

//var_dump(Subscription::Get(825)); teste 


//Teste Adesão

// $payload = new SubscriptionRequest();
// $payload ->Plan = 68;
// $payload -> SubscriptionObject = ['TokenCard' => '3bd7299625ef4e57a001340cf2f5e0ad'];

// $payload -> Customer->Name  = 'João da Silva';
// $payload -> Customer->Identity =  '31037942000178';
// $payload -> Customer->Email =  'safe2pay@safe2pay.com.br';

// $payload -> Customer->Address->ZipCode = '90670090';
// $payload -> Customer->Address->Street = 'Logradouro';
// $payload -> Customer->Address->Number = '123';
// $payload -> Customer->Address->District = 'Higienopolis';
// $payload -> Customer->Address->StateInitials = 'RS';
// $payload -> Customer->Address->CityName = 'Porto Alegre';
// $payload -> Customer->Address->CountryName = 'Brasil';

//var_dump(Subscription::Add($payload));

?>