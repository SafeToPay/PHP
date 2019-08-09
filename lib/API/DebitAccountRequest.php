<?php
namespace API;

use Models\Core\Client;
use Models\Response\Response;


require_once '../Models/Core/Client.php';
require_once '../Models/Response/InvoiceResponse.php';

/**
 * Class DebitAccountRequest
 *
 * @package  Api
 */
class DebitAccountRequest{


    /**
     * Get a  debit account Register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){ 

        $request = Client:: HttpClient('GET',"v2/DebitAccount/Get?id={$Id}", null, false);

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

        $request = Client:: HttpClient('DELETE',"v2/DebitAccount/Cancel?id={$Id}", null,false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response;
    }
}


?>