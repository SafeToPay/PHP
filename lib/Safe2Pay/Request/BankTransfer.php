<?php
namespace Safe2Pay\Api;
include_once(__DIR__.'/../Core/Client.php');



class BankTransfer{


    public static function Transfer($object){

        $request = Client:: HttpClient('POST','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

}

?>