<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;

require_once __DIR__.'/../Models/Core/Client.php';
require_once __DIR__.'/../Models/Response/Response.php';

/**
 * Class TokenizationRequest
 *
 * @package Api
 */
class TokenizationRequest {

     /**
     * Tokenization Credit Card
     *
     * @param [CreditCard] $data
     * @return Response
     */
    public static function Create($data){ 
        
        $request = Client:: HttpClient('POST','v2/token', $data, true);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
}
?>