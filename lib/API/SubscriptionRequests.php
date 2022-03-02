<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';

/**
 * Class SubscriptionRequest
 *
 * @package  Api
 */
class SubscriptionRequests{

    /**
     * Get Subscription
     *
     * @param [Id] $id
     * @return Array
     */
    public static function Get($id)
    {   
        $response = Client::HttpClient('GET', "Subscription/Get?Id={$id}", null, false);
        return $response;
    }

    /**
     * List Subscription
     *
     * @param [PageNumber] $pageNumber, [RowsPerPage] $rowsPerPage
     * @return Array
     */
    public static function List($pageNumber, $rowsPerPage)
    {   
        $response = Client::HttpClient('GET', "Subscription/List?PageNumber={$pageNumber}&RowsPerPage={$rowsPerPage}", null, false);
        return $response;
    }

    /**
     * Add Subscription
     *
     * @param [Subscription] $subscription
     * @return Response
     */
    public static function Add($subscription)
    {
        $response = Client::HttpClient('POST', 'Subscription/Add', $subscription, true);

        return $response;
    }

    /**
     * Update Token Card
     *
     * @param [Subscription] $cardData, [Id] $id
     * @return Response
     */
    public static function UpdateTokenCard($cardData, $id)
    {
        $response = Client::HttpClient('PUT', "Subscription/UpdateTokenCard?id={$id}", $cardData, true);

        return $response;
    }

    /**
     * Delete Subscription
     *
     * @param [Id] $id
     * @return Response
     */
    public static function Delete($id)
    {
        $response = Client::HttpClient('DELETE', "Subscription/Delete?Id={$id}", null, false);

        return $response;
    }
}
