<?php
namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;

require_once __DIR__.'/../Models/Core/Client.php';
require_once __DIR__.'/../Models/Response/Response.php';

/**
 * Class AccountDepositRequest
 *
 * @package Safe2Pay\Api
 */
class AccountDepositRequest{

 /**
     * List deposit Register
     *
     * @param [int] $day
     * @param [int] $month
     * @param [int] $year
     * @param [int] $page
     * @param [int] $rowsPerPage
     * @return Response
     */
    public static function GetListDetailsDeposits($day,$month,$year,$page,$rowsPerPage){

        $request = Client:: HttpClient('GET',"v2/CheckingAccount/GetListDetailsDeposits?day={$day}&month={$month}&year={$year}&page={$page}&rowsPerPage={$rowsPerPage}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

    /**
     * List deposit Register
     *
     * @param [int] $day
     * @param [int] $month
     * @return Response
     */
    public static function GetListDeposits($month,$year){

        $request = Client:: HttpClient('GET',"v2/CheckingAccount/GetListDeposits?month={$month}&year={$year}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Get the bank account details 
     * @return Response
     */
    public static function GetBankAccount(){

        $request = Client:: HttpClient('GET','v2/MerchantBankData/Get', null,false);
        $response = json_decode($request , true);
        return  $response;
    }

}
