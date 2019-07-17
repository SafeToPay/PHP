<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

/**
 * Class DebitAccountRequest
 *
 * @package Safe2Pay\Api
 */
class DebitAccountRequest{


    /**
     * Get a  debit account Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){ 

        $request = Client:: HttpClient('GET','v2/DebitAccount/Get?id='.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }

    /**
     * Cancel a Debit Account Register
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Cancel($Id){

        $request = Client:: HttpClient('DELETE','v2/DebitAccount/Cancel?id='.$Id, null,false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return response;
    }
}


?>