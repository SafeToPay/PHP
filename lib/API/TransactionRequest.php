<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';
/**
 * Class TransactionRequest
 *
 * @package Api
 */
class TransactionRequest {
    
    /**
     * Get transaction register
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){ 
 
        $response = Client:: HttpClient('GET',"transaction/Get?Id={$Id}", null, false);

        return $response; 
    }

      /**
     * Get transaction register by ref
     *
     * @param [int] $reference
     * @return Response
     */
    public static function GetByRefeference($reference){ 

        $response = Client:: HttpClient('GET',"transaction/Reference?reference={$reference}", null, false);

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
        $query = $amount != null || $amount != 0 ? "CreditCard/Capture/{$idTransaction}/{$amount}" 
                                                 : "CreditCard/Capture/{$idTransaction}";

                                                 echo($query);

        $response = Client::HttpClient('PUT', "CreditCard/Capture/{$idTransaction}", null, false);

        return $response;
    }

    public static function List($pageNumber, $rowsPerPage, $isSandbox, $createdDateInitial, $createdDateEnd, 
                                $paymentDateInitial, $paymentDateEnd, $Id, $reference, $customerName,
                                $customerIdentity, $paymentMethodCode, $transactionStatusCode){
        
        $request = "Transaction/List?PageNumber={$pageNumber}&RowsPerPage={$rowsPerPage}&Object.IsSandbox={$isSandbox}";
        
        if($createdDateInitial != null)
            $request = $request."&CreatedDateInitial={$createdDateInitial}";

        if($createdDateEnd != null)
            $request = $request."&CreatedDateEnd={$createdDateEnd}";
        
        if($paymentDateInitial != null)
            $request = $request."&PaymentDateInitial={$paymentDateInitial}";

        if($paymentDateEnd != null)
            $request = $request."&PaymentDateEnd={$paymentDateEnd}";

        if($Id != 0)
            $request = $request."&Object.Id={$Id}";

        if($reference != null)
            $request = $request."&Object.Reference={$reference}";
        
        if($customerName != null)
            $request = $request."&Object.Customer.Name={$customerName}";

        if($customerIdentity != null)
            $request = $request."&Object.Customer.Identity={$customerIdentity}";
        
        if($paymentMethodCode != null)
            $request = $request."&Object.PaymentMethod.Code={$paymentMethodCode}";

        if($transactionStatusCode != null)
            $request = $request."&Object.TransactionStatus.Code={$transactionStatusCode}";

        $response = Client:: HttpClient('GET',$request, null, false);

        return $response; 
    }
}

?>