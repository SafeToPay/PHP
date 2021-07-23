<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;

require_once __DIR__ . '/../Models/Core/Client.php';
require_once __DIR__ . '/../Models/Response/Response.php';

/**
 * Class MarketplaceRequest
 *
 * @package  Api
 */
class MarketplaceRequest
{

     /**
     * Add Merchant
     *
     * @param [Merchant] $merchant
     * @return Response
     */
    public static function Add($merchant)
    {

        $response = Client:: HttpClient('POST', 'Marketplace/Add', $merchant, false);
        return $response;
    }

    /**
     * Update Merchant
     *
     * @param [Merchant] $merchant
     * @param [int] $Id
     * @return Response
     */
    public static function Update($merchant)
    {

        $response = Client:: HttpClient('PUT', "Marketplace/Update?id={$merchant->Id}", $merchant, false);
        return $response;
    }

    /**
     * Delete Merchant
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Delete($Id)
    {

        $response = Client:: HttpClient("DELETE", "Marketplace/Delete?id={$Id}", null, false);
        return $response;
    }

     /**
     * Get Merchant
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id)
    {

        $response = Client:: HttpClient('GET', "Marketplace/Get?id={$Id}", null, false);
        return $response;
    }

     /**
     * Merchant List
     *
     * @param [PageNumber] $PageNumber
     * @param [RowsPage] $RowsPage
     * @return Response
     */
    public static function List($PageNumber, $RowsPage)
    {

        $response = Client:: HttpClient('GET', "Marketplace/List?PageNumber={$PageNumber}&RowsPerPage={$RowsPage}", null, false);
        return $response;
    }
}
