<?php
namespace Safe2Pay\Api;
include_once(__DIR__.'/../Core/Client.php');



class DebitAccount{


    public static function Get($Id){ 

        $request = Client:: HttpClient('GET','v2/DebitAccount/Get?id='.$Id, null, false);

        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return $response; 
    }


    

    public static function Cancel($Id){

        $request = Client:: HttpClient('DELETE','v2/DebitAccount/Cancel?id='.$Id, json_encode(null),false);
    
        $response = new Response();

        foreach (json_decode($request , true) as $key => $value) $response->{$key} = $value;

        return response;
    }


//$response  =  Transaction::Get(8);
//var_dump(json_encode($response));

//$response  =  Transaction::Cancel(8);
//var_dump(json_encode($response));

}


?>