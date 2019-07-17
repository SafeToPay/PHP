<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core;

include_once(__DIR__.'/../Core/Client.php');

/**
 * Class CarnetRequest
 *
 * @package Safe2Pay\Api
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