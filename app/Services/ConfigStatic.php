<?php
namespace App\Services;

class ConfigStatic
{
    public static $apiKey="sdsds";

    public static function GetApiKey(){
        return self::$apiKey;
    }

    public static function SetApi($newkey){
         self::$apiKey = $newkey;
    }
 
}
