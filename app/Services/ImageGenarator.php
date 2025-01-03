<?php
namespace App\Services;
use App\Services\AiService;
use GuzzleHttp\Client;

class ImageGenarator
{

    public function __construct(private AiService $aiService)
    {
        
    }

    // private $aiService;
    // public function __construct(){
    //     $this->aiService = new AiService(new Client(),"pass123");
    // }


    public function generate(string $prompt):string
    {
      
        //return $this->aiService->generateImage($prompt);
        return $this->aiService->generateImage($prompt);

    }
}
