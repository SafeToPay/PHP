<?php
namespace API;

use Models\Core\Client;
use Models\Response\Response;


require_once __DIR__.'/../../vendor/autoload.php';

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

        $request = Client:: HttpClient('POST','v2/transfer', json_encode($transfer),false);
        $response = json_decode($request , true);
        return $response;
    }

}

?>