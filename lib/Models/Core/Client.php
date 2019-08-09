<?php

namespace Models\Core;


require __DIR__.'\Config.php';


class Client
{

   public static function HttpClient($method, $url, $data, $IsPayment)
   {

      $url = Client::GetWebMethodUri($IsPayment) . $url;

      echo   $url;

      $curl = curl_init();

      switch ($method) {
         case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "DELETE":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            break;
         default:
            if ($data)
               $url = sprintf("%s?%s", $url, http_build_query($data));
      }

      curl_setopt($curl, CURLOPT_URL, $url);

      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
         'X-API-KEY: ' . Config::getToken(),
         'Content-Type: application/json',
      ));

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

      $result = curl_exec($curl);
      if (!$result) {
         die("Connection Failure");
      }

      curl_close($curl);
      return $result;
   }



   private static function GetWebMethodUri($IsPayment)
   {

      if (!$IsPayment) {
         return "https://api.safe2pay.com.br/";
      } else {
         return "https://payment.safe2pay.com.br/";
      }
   }
}
