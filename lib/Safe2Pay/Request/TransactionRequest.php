<?php

namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;
use Safe2Pay\Core\Config;

include_once(__DIR__.'/../Core/Client.php');
include_once(__DIR__.'/../Models/Response/Response.php');

/**
 * Class TransactionRequest
 *
 * @package Safe2Pay\Api
 */
class TransactionRequest {
    
    /**
     * Get transaction register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){ 
 
        $request = Client:: HttpClient('GET',"v2/transaction/Get?Id={$Id}", null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
}

?>