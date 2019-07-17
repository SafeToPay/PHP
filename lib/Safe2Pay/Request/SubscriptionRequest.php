<?php

namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

class Subscription{


    public static function Add($data){

        $config = new Config("77CE92E1F1044F079DFD4C3383FB5BB0");

        $request = Client:: HttpClient('POST','v2/subscription', json_encode($data), false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    public static function Get($Id){

        $config = new Config("77CE92E1F1044F079DFD4C3383FB5BB0");

        $request = Client:: HttpClient('GET','v2/subscription/get?id='.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 

    }

}
?>