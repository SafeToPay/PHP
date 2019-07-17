<?php

namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once(__DIR__.'/../Core/Client.php');
include_once(__DIR__.'/../Models/Response/Response.php');

/**
 * Class TokenizationRequest
 *
 * @package Safe2Pay\Api
 */
class TokenizationRequest {

     /**
     * Tokenization Credit Card
     *
     * @param [CreditCard] $data
     * @return Response
     */
    public static function Create($data){ 
        
        $request = Client:: HttpClient('POST','v2/token', json_encode($data), true);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
}
?>