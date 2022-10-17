<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';

/**
 * Class TransferenceRequest
 *
 * @package  Api
 */
class TransferenceRequest{

    /**
     * Get Transference Methods
     *
     * @param [Int] $IdTransferRegister
     * @return Array
     */
    public static function GetTransference($IdTransferRegister)
    {   
        $response = Client::HttpClient('GET', "Transfer/Get?Id={$IdTransferRegister}", null, false);
        return $response;
    }
    /**
     * Get Transference Methods
     *
     * @param [Transference] $transference
     * @return Array
     */
    public static function GetListLot($PageNumber, $RowsPerPage)
    {   
        $response = Client::HttpClient('GET', "Transfer/ListLot?PageNumber={$PageNumber}&RowsPerPage={$RowsPerPage}", null, false);
        return $response;
    }
    /**
     * Get Transference Methods
     *
     * @param [Transference] $transference
     * @return Array
     */
    public static function GetDetailLot($IdTransferRegisterLot, $PageNumber, $RowsPerPage)
    {   
        $response = Client::HttpClient('GET', "Transfer/List?Object.IdTransferRegisterLot={$IdTransferRegisterLot}&PageNumber={$PageNumber}&RowsPerPage={$RowsPerPage}", null, false);
        return $response;
    }

    /**
     * Create Transference
     *
     * @param [Transference] $Transference
     * @return Response
     */
    public static function CreateTransference($Transference)
    {
        $response = Client::HttpClient('POST', 'transfer', $Transference, true);
        return $response;
    }
}
?>