<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;


require_once __DIR__.'\../Models/Core/Client.php';
require_once __DIR__.'\../Models/Response/Response.php';

/**
 * Class CarnetRequest
 *
 * @package Api
 */
class CarnetRequest{

    /**
     * Get a Lot
     *
     * @param [string] $identifier
     * @return Response
     */
    public static function Get($Identifier){ 

        $request = Client:: HttpClient('GET',"v1/carnet/{$Identifier}", null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    /**
     * Cancel Carnet Lot
     *
     * @param [string] $identifier
     * @return Response
     */
    public static function CancelLot($Identifier){

        $request = Client:: HttpClient('DELETE',"v1/carnet/{$Identifier}",null,false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * Cancel Carnet
     *
     * @param [string] $identifier
     * @return Response
     */
    public static function Cancel($Identifier){

        $request = Client:: HttpClient('DELETE',"v1/carnet/{$Identifier}", null,false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return response;
    }

}

?>