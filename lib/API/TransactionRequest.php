<?php

namespace API;

use Models\Core\Client;
use Models\Response\Response;

require __DIR__.'\../Models/Core/Client.php';
require __DIR__.'\../Models/Response/Response.php';
/**
 * Class TransactionRequest
 *
 * @package Api
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