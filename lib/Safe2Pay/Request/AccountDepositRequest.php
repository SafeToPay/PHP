<?php
namespace Safe2Pay\Api;

use Safe2Pay\Models\BankSlip;
use Safe2Pay\Core;

include_once(__DIR__.'/../Core/Client.php');

class AccountDeposit{


    public static function List($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Detail($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function GetBankAccount($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

}

?>