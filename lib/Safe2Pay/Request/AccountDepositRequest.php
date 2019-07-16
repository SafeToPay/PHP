<?php
namespace Safe2Pay\Api;

use Safe2Pay\Core\Client;
use Safe2Pay\Models\Response;

include_once('../Core/Client.php');
include_once('../Models/Response/Response.php');

class AccountDeposit{


    public static function Detail($Id){

        $request = Client:: HttpClient('GET',"v2/Transfer/Get?Id={$Id}", null,false);
        $response = json_decode($request , true);
        return  $response;
    }

    public static function List($CreatedDateInitial,$CreatedDateEnd,$PageNumber,$RowsPerPage){

        $request = Client:: HttpClient('GET',"v2/Transfer/List?CreatedDateInitial={$CreatedDateInitial}&CreatedDateEnd={$CreatedDateEnd}&PageNumber={$PageNumber}&RowsPerPage={$RowsPerPage}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

    public static function GetBankAccount(){

        $request = Client:: HttpClient('GET','v2/MerchantBankData/Get', null,false);
        $response = json_decode($request , true);
        return  $response;
    }

}

?>