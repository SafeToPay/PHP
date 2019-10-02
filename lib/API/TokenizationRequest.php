<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';

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
        
        $response = Client:: HttpClient('POST','token', $data, true);

        return $response; 
    }
}
?>