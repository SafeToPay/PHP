<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core;


include_once(__DIR__.'/../Core/Client.php');

class Carnet{


    public static function Get($identifier){ 

        $request = Client:: HttpClient('GET','v1/carnet/'.$identifier, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    public static function CancelLot($identifier){

        $request = Client:: HttpClient('DELETE','v1/carnet/'.$identifier, json_encode(null),false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return response;
    }

    public static function Cancel($identifier){

        $request = Client:: HttpClient('DELETE','v1/carnet/'.$identifier, json_encode(null),false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return response;
    }

}

?>