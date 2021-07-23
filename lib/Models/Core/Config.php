<?php

namespace Safe2Pay\Models\Core;

require_once __DIR__ . '/Client.php';
use Safe2Pay\Models\Core\Client as Enviroment;
class Config
{

    private $Token = "x-api-key";

    public function setAPIKEY($Token)
    {
        $this->Token = $Token;
        Enviroment::SetEnviroment($this->Token);
    }
}
