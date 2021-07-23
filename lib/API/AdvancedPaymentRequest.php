<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__ . '/../Models/Core/Client.php';


/**
 * Class AdvancedPaymentRequest
 *
 * @package Safe2Pay\Api
 */
class AdvancedPaymentRequest
{



    /**
     * Advanced Payment Simulation
     * @return Response
     */
    public static function Simulation()
    {

        $response = Client:: HttpClient('GET', "AdvancePayment/Simulation", null, false);
        return $response;
    }


     /**
     * Advanced Payment Simulation
     * @return Response
     */
    public static function AdvancedPaymentRequire()
    {

        $response = Client:: HttpClient('GET', "AdvancePayment/Require", null, false);
        return $response;
    }
}
