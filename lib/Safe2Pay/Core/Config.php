<?php


class Config
{
    private static $Token = "77CE92E1F1044F079DFD4C3383FB5BB0";
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
