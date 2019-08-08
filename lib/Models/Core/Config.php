<?php

namespace Models\Core;

class Config
{
    private static $Token = "5A3A044DE838403F9566BDFBEE9DE763";
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
