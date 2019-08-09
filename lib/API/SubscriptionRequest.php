<?php

namespace API;

use Models\Core\Client;
use Models\Response\Response;

require_once '../Models/Core/Client.php';
require_once '../Models/Response/InvoiceResponse.php';

/**
 * Class Subscription
 *
 * @package Api
 */
class Subscription{

 /**
     * Add a Subscription Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Add($data){

        $request = Client:: HttpClient('POST','v2/subscription', json_encode($data), false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    /**
     * Get a Subscription Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){

        $request = Client:: HttpClient('GET',"v2/subscription/get?id={$Id}", null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 

    }

}
