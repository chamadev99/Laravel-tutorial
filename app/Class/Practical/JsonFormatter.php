<?php

namespace App\Class\Practical;

class JsonFormatter implements Formatter
{
    public function formate($data)
    {
        return json_encode($data);
    }
}
