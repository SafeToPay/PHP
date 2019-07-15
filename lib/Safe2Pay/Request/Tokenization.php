<?php

include_once('../Core/Client.php');
include_once('../Models/Payment/CreditCard.php');
include_once('../Models/Response/Response.php');

class Tokenization {

    public static function Create($data){ 
        $request = Client:: HttpClient('POST','v2/token', json_encode($data), true);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
}

// $CreditCard = new CreditCard("João da Silva","4024007153763191","12/2019","241");  

// $response  =  Tokenization::Create($CreditCard);

// var_dump($response);

?>