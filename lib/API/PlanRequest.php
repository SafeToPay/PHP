<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';
require_once __DIR__.'/../Models/Response/Response.php';


/**
 * Class PlanRequest
 *
 * @package  Api
 */
class PlanRequest{

    /**
     * Get Plan
     *
     * @param [Id] $id
     * @return Array
     */
    public static function Get($id)
    {   
        $response = Client::HttpClient('GET', "Plan/Get?Id={$id}", null, false);
        return $response;
    }

    /**
     * List Plan
     *
     * @param [Name] $name, [IsEnabled] $isEnabled, [PageNumber] $pageNumber, [RowsPerPage] $rowsPerPage
     * @return Array
     */
    public static function List($name, $isEnabled, $pageNumber, $rowsPerPage)
    {   
        $response = Client::HttpClient('GET', "Plan/List?Object.Name={$name}&Object.IsEnabled={$isEnabled}&PageNumber={$pageNumber}&RowsPerPage={$rowsPerPage}", null, false);
        return $response;
    }

    /**
     * Add Plan
     *
     * @param [Plan] $plan
     * @return Response
     */
    public static function Add($plan)
    {
        $response = Client::HttpClient('POST', 'Plan/Add', $plan, false);

        return $response;
    }

    /**
     * Update Plan
     *
     * @param [Plan] $plan
     * @return Response
     */
    public static function Update($plan)
    {
        $response = Client::HttpClient('PUT', 'Plan/Update', $plan, false);

        return $response;
    }

    /**
     * Enable/Disable a Plan
     *
     * @param [Plan] $plan
     * @return Response
     */
    public static function UpdateEnabled($plan)
    {
        $response = Client::HttpClient('PUT', 'Plan/UpdateEnabled', $plan, false);

        return $response;
    }
}
