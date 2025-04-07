<?php

namespace App\Class\Practical;

class DatabaseConnection
{

    private $table = "user";
    public function __construct()
    {
        echo  "open db" . "<br>";
    }

    public function __destruct()
    {
        echo "close db" . "<br>";
    }

    public function __get($property)
    {
        return $this->$property . "<br>";
    }
}
