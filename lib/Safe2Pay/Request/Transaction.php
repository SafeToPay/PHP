<?php

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

class Transaction {

    public static function Get($Id){ 

        $request = Client:: HttpClient('GET','v2/transaction/Get?Id='.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
}

//$response  =  Transaction::Get(82548);
//var_dump(json_encode($response));

?>