<?php

namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;
use Safe2Pay\Models\Transference\InternalTransfer as InternalTransferModel;

require_once __DIR__ . '/../Models/Core/Client.php';
require_once __DIR__ . '/../Models/Response/Response.php';

/**
 * Class InvoiceRequest
 *
 * @package  Api
 */
class InternalTransfer
{

    /**
     * Make a  Internal Transfer
     *
     * @param [InternalTransferModel] $internalTransfer
     * @return Response
     */
    public static function Add(InternalTransferModel $internalTransfer)
    {

        $response = Client::HttpClient('POST', 'InternalTransfer', $internalTransfer->JsonSerialize(), true);
        return  $response;
    }
}
