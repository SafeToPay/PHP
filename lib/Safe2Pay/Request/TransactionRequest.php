<?php

namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;
use Safe2Pay\Core\Config;

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

?>