<?php

namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');;

class Payment
{
    public static function GetPaymentMethods()
    {

        $request = Client::HttpClient('GET', 'v1/methods', null, false);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function BankSlip($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function CreditCard($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function CryptoCurrency($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function DebitCard($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function Carnet($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Carnet', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function CarnetLot($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Carnet', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function DebitAccount($payment)
    {

        $request = Client::HttpClient('POST', 'v2/payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    public static function Refund($Id)
    {

        $request = Client::HttpClient('DELETE', 'v2/CreditCard/Cancel/'.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

   
}

