<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

class DebitAccount{


    public static function Get($Id){ 

        $request = Client:: HttpClient('GET','v2/DebitAccount/Get?id='.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    public static function Cancel($Id){

        $request = Client:: HttpClient('DELETE','v2/DebitAccount/Cancel?id='.$Id, null,false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return response;
    }
}


?>