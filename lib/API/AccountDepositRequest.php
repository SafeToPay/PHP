<?php
namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;

require_once __DIR__.'/../Models/Core/Client.php';

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

        $response = Client:: HttpClient('GET',"CheckingAccount/GetListDetailsDeposits?day={$day}&month={$month}&year={$year}&page={$page}&rowsPerPage={$rowsPerPage}", null,false);
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

        $response = Client:: HttpClient('GET',"CheckingAccount/GetListDeposits?month={$month}&year={$year}", null,false);
        return $response;
    }

     /**
     * Get the bank account details 
     * @return Response
     */
    public static function GetBankAccount(){

        $response = Client:: HttpClient('GET','MerchantBankData/Get', null,false);
        return  $response;
    }

     /**
     * Get the bank account details 
     * @return Response
     */
    public static function GetDepositDetail($id){

        $response = Client:: HttpClient('GET',"Transfer/Get?Id={$id}", null,false);
        return  $response;
    }

}
