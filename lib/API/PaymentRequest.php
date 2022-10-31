<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';

/**
 * Class PaymentRequest
 *
 * @package  Api
 */
class PaymentRequest{

    /**
     * Get Payment Methods
     *
     * @param [Payment] $payment
     * @return Array
     */
    public static function GetPaymentMethods()
    {   
        $response = Client::HttpClient('GET', 'MerchantPaymentMethod/List', null, false);
        return $response;
    }

    /**
     * Create Payment
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CreatePayment($payment)
    {
        $response = Client::HttpClient('POST', 'Payment', $payment, true);

        return $response;
    }

    /**
     * Capture Payment
     *
     * @param [int] $idTransaction
     * @param [double] $amount
     * @return Response
     */
    public static function CapturePayment($idTransaction, $amount = 0)
    {
        $query = $amount == null || $amount == 0 ? "CreditCard/Capture/{$idTransaction}" 
                                                 : "CreditCard/Capture/{$idTransaction}/{$amount}";

        $response = Client::HttpClient('PUT', $query, null, false);

        return $response;
    }

     /**
     * Refund a payment
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Refund($Id, $type, $amount = null)
    {
        $response = null;

        switch ($type) {
            case RefundType::DEBIT:
            $response = Client::HttpClient('DELETE', "DebitCard/Cancel/{$Id}", null, false);
                break;
            case RefundType::CREDIT:
            $response = Client::HttpClient('DELETE', "CreditCard/Cancel/{$Id}", null, false);
                break;
            case RefundType::PARTIALCREDIT:
                $response = Client::HttpClient('DELETE', "CreditCard/Cancel/{$Id}/{$amount}", null, false);
                break;
            case RefundType::BANKSLIP:
            $response = Client::HttpClient('DELETE', "BankSlip/WriteOffBankSlip?idTransaction={$Id}", null, false);
                break;
            case RefundType::PIX:
            $response = Client::HttpClient('DELETE', "Pix/Cancel/{$Id}", null, false);
                break;                  
            default:
                return "Payment method type to be refunded was not entered";
        }

        return  $response;
    }

/**===============================================Initial Carnet Methods================================================== */
    
    /**
     * Carnet Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function Carnet($payment)
    {

        $response = Client::HttpClient('POST', 'Carnet', $payment, true);

        return $response;
    }

    /**
     * Carnet Lot Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CarnetLot($payment)
    {

        $response = Client::HttpClient('POST', 'carnetasync', $payment, true);

        return $response;
    }

  /**
     * Carnet Get 
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function GetCarnet($identifier)
    {
        $response = Client::HttpClient('GET', "Carnet/Get?identifier={$identifier}", null, false);

        return $response;
    }


  /**
     * Carnet Async Get 
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function GetCarnetAsync($identifier)
    {

        $response = Client::HttpClient('GET', "carnetasync/Get?identifier={$identifier}", null, false);

        return $response;
    }


/**
     * Resend Carnet 
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function ResendCarnet($identifier)
    {

        $response = Client::HttpClient('GET', "carnet/Resend?identifier={$identifier}", null, false);

        return $response;
    }

    /**
     * Cancel Carnet 
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CancelCarnet($identifier)
    {

        $response = Client::HttpClient('DELETE', "Carnet/Delete?identifier={$identifier}", null, false);

        return $response;
    }

       /**
     * Cancel Carnet Lot 
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CancelCarnetLot($identifier)
    {

        $response = Client::HttpClient('DELETE', "CarnetAsync/Delete?identifier={$identifier}", null, false);

        return $response;
    }
/**===============================================END Carnet Methods================================================== */

}


class RefundType
{
    public const DEBIT = 'DEBIT';
    public const CREDIT = 'CREDIT';
    public const PARTIALCREDIT = 'PARTIALCREDIT';
    public const BANKSLIP = 'BANKSLIP';
    public const PIX = 'PIX';
}

