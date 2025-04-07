<?php

namespace App\Class\Practical;

class HtmlFormatter implements Formatter
{
    public function formate($data)
    {
        return "<html><body>" . $data . "</body></html>";
    }
}
