<?php
namespace Models\Core;

require_once __DIR__.'\Client.php';

use Models\Core\Client as Enviroment;

class Config
{

    private  $Token = "x-api-key";

	public function setAPIKEY($Token){
        $this->Token = $Token;
        Enviroment::SetEnviroment($this->Token);
	}
}
