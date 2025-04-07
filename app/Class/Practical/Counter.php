<?php

namespace App\Class\Practical;


class Counter
{
    use Time;
    //  public const count = 0; //constant
    public static $count = 0; //variabale

    public function increment()
    {
        //echo "Counter incremented: " . self::$count . "<br>";
        /// return self::count; //constant
        return self::$count++; //variabale
    }

    public static function showTime()
    {
        return static::getTime();
    }
}
