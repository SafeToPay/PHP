<?php

namespace Models\Core;

class Config
{
    private static $Token = "x-api-key";
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
