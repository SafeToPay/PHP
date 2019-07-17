<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

/**
 * Class InvoiceRequest
 *
 * @package Safe2Pay\Api
 */
class InvoiceRequest{


    /**
     * Make a  Sale
     *
     * @param [SingleSale] $SingleSale
     * @return Response
     */
    public static function Add($SingleSale){

        $request = Client:: HttpClient('POST','v2/SingleSale/Add', json_encode($SingleSale),false);
        $response = json_decode($request , true);
        return  $response;
    }

    /**
     * Get a  Sale
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Get($HashSale){

        $request = Client:: HttpClient('GET',"v2/SingleSale/Get?singleSaleHash={$HashSale}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Update a Sale
     *
     * @param [SingleSale] $SingleSale
     * @return Response
     */
    public static function Update($SingleSale){

        $request = Client:: HttpClient('PUT',"v2/SingleSale/Update", json_encode($SingleSale),false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Cancel a Sale
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Cancel($HashSale){

        $request = Client:: HttpClient('DELETE',"v2/SingleSale/Delete?singleSaleHash={$HashSale}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Cancel a Sale
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Resend($object){

        $request = Client:: HttpClient('POST','', null,false);
        $response = json_decode($request , true);
        return response;
    }
}

?>