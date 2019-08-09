<?php

namespace API;

use Models\Core\Client;
use Models\Response\Response;

require __DIR__.'\../Models/Core/Client.php';
require __DIR__.'\../Models/Response/Response.php';

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
        
        $request = Client:: HttpClient('POST','v2/token', json_encode($data), true);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }
}
?>