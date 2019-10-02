<?php
namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;


require_once __DIR__.'/../Models/Core/Client.php';
require_once __DIR__.'/../Models/Response/Response.php';

/**
 * Class InvoiceRequest
 *
 * @package  Api
 */
class InvoiceRequest{


    /**
     * Make a  Sale
     *
     * @param [SingleSale] $SingleSale
     * @return Response
     */
    public static function Add($SingleSale){

        $response = Client:: HttpClient('POST','SingleSale/Add', $SingleSale,false);
        return  $response;
    }

    /**
     * Get a  Sale
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Get($HashSale){

        $response = Client:: HttpClient('GET',"SingleSale/Get?singleSaleHash={$HashSale}", null,false);
        return $response;
    }

     /**
     * Update a Sale
     *
     * @param [SingleSale] $SingleSale
     * @return Response
     */
    public static function Update($SingleSale){

        $response = Client:: HttpClient('PUT',"SingleSale/Update", $SingleSale,false);
        return $response;
    }

     /**
     * Cancel a Sale
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Cancel($HashSale){

        $response = Client:: HttpClient('DELETE',"SingleSale/Delete?singleSaleHash={$HashSale}", null,false);
        return $response;
    }

     /**
     * Cancel a Sale
     *
     * @param [string] $HashSale
     * @return Response
     */
    public static function Resend($HashSale){

        $response = Client:: HttpClient('GET',"SingleSale/Resend?singleSaleHash={$HashSale}", null,false);
        return $response;
    }
}

?>