<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';
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
 
        $response = Client:: HttpClient('GET',"transaction/Get?Id={$Id}", null, false);

        return $response; 
    }

      /**
     * Get transaction register by ref
     *
     * @param [int] $reference
     * @return Response
     */
    public static function GetByRefeference($reference){ 

        $response = Client:: HttpClient('GET',"transaction/Reference?reference={$reference}", null, false);

        return $response; 
    }
}

?>