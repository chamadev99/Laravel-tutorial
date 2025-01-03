<?php
namespace App\Services;

use GuzzleHttp\Client;

class AiService
{
    
    public function __construct(private Client $client,private $apiKey)
    {
   
    }


    public function generateImage(string $prompt):string
    {
      
      return "image : $prompt . $this->apiKey" ;
    }

    public function generatText(string $prompt):string
    {   

        return "blog text : $prompt . $this->apiKey" ;
       
    }
}
