<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core;

include_once(__DIR__.'/../Core/Client.php');

class Invoice{


    public static function Send($object){

        $request = Client:: HttpClient('POST','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Get($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Update($object){

        $request = Client:: HttpClient('PUT','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Cancel($object){

        $request = Client:: HttpClient('DELETE','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Resend($object){

        $request = Client:: HttpClient('POST','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }
}

?>