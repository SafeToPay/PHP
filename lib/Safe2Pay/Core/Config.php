<?php

namespace Safe2Pay\Core;

class Config
{
    private static $Token = "INFORME SEU TOKEN";
    private static $IsSandBox = true;

    public static function getToken()
    {
        return self::$Token;
    }

    public static function getIsSandBox()
    {
        return self::$IsSandBox;
    }
}
