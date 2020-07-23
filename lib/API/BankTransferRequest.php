<?php
namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;

require_once __DIR__.'/../Models/Core/Client.php';
require_once __DIR__.'/../Models/Response/Response.php';

/**
 * Class BankTransferRequest
 *
 * @package Api
 */
class BankTransferRequest{

    /**
     * Get a Lot
     *
     * @param [Transfer] $object
     * @return Response
     */
    public static function Transfer($transfer){

        $response = Client:: HttpClient('POST','transfer', $transfer, true);
        return $response;
    }

}