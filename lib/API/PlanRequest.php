<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;


require_once __DIR__.'/../Models/Core/Client.php';
require_once __DIR__.'/../Models/Response/Response.php';

/**
 * Class PlanRequest
 *
 * @package  Api
 */
class PlanRequest{

 /**
     * Add a Subscription Register
     *
     * @param [Plan] $Id
     * @return Response
     */
    public static function Add($plan){

        $request = Client:: HttpClient('POST','v2/Plan/Add', $plan, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    /**
     * Update a Subscription Register
     *
     * @param [Plan] $plan
     * @return Response
     */
    public static function Update($plan){

        $request = Client:: HttpClient('PUT','v2/Plan/Update', $plan, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    /**
     * Get a Plan Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){

        $request = Client:: HttpClient('GET',"v2/Plan/Get?Id={$Id}", null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 

    }

    /**
     * List Plan Register
     *
     * @param [int] $PageNumber
     * @param [int] $Rowspage
     * @return Response
     */
    public static function List($PageNumber,$Rowspage){

        $request = Client:: HttpClient('GET',"v2/Plan/List?PageNumber={$PageNumber}&RowsPerPage={$Rowspage}", null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 

    }

}
