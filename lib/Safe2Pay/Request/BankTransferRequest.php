<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core;

include_once(__DIR__.'/../Core/Client.php');

/**
 * Class BankTransferRequest
 *
 * @package Safe2Pay\Api
 */
class BankTransferRequest{

    /**
     * Get a Lot
     *
     * @param [Transfer] $object
     * @return Response
     */
    public static function Transfer($transfer){

        $request = Client:: HttpClient('POST','v2/transfer', json_encode($transfer),false);
        $response = json_decode($request , true);
        return $response;
    }

}

?>