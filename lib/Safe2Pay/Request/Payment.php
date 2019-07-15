<?php
use Safe2Pay\Models\CreditCard;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');



class Payment{


    public static function GetPaymentMethods(){

        $request = Client:: HttpClient('GET','v1/methods', null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
    

    public static function CreditCard($payment){

        $request = Client:: HttpClient('POST','v2/Credit', json_encode($payment),true);
        $response = json_decode($request , true);
        return response;
    }

    public static function DebitCard($payment){

        $request = Client:: HttpClient('POST','v2/Debit', json_encode($payment),true);
        $response = json_decode($request , true);
        return response;
    }

    public static function BankSlip($payment){

        $request = Client:: HttpClient('POST','v2/BankSlip', json_encode($payment),true);
        $response = json_decode($request , true);
        return response;
    }

    public static function CarnetLot($payment){

        $request = Client:: HttpClient('POST','v2/Carnet', json_encode($payment),true);
        $response = json_decode($request , true);
        return response;
    }

    public static function CryptoCurrency ($payment){

        $request = Client:: HttpClient('POST','v2/Bitcoin', json_encode($payment),true);
        $response = json_decode($request , true);
        return response;
    }


    public static function DebitAccount ($payment){

        $request = Client:: HttpClient('POST','v2/payment', json_encode($payment),true);
        $response = json_decode($request , true);
        return response;
    }

    public static function CancelCarnet($identifier){

        $request = Client:: HttpClient('DELETE','v2/carnet/identifier?='.$identifier , null,true);
        $response = json_decode($request , true);
        return response;
    }

    public static function Refund($object){

        $request = Client:: HttpClient('DELETE','', json_encode(null),true);
        $response = json_decode($request , true);
        return response;
    }
}


//Tests

// var_dump(Payment::GetPaymentMethods());


//Payment Tests


$creditCard = new CreditCard();










?>