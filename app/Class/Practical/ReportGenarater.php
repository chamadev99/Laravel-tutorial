<?php

namespace App\Class\Practical;

class ReportGenarater
{
    private $formate;
    public function __construct(Formatter $formate)
    {
        $this->formate = $formate;
    }

    public function generate($data)
    {
        return  $this->formate->formate($data);
    }
}
