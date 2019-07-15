<?php
namespace Safe2Pay\Api;
include_once(__DIR__.'/../Core/Client.php');



class Carnet{


    public static function GetLot($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function CancelLot($object){

        $request = Client:: HttpClient('DELETE','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Cancel($object){

        $request = Client:: HttpClient('DELETE','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }
}

?>