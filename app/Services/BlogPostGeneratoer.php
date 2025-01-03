<?php
namespace App\Services;
use App\Services\AiService;
use GuzzleHttp\Client;
class BlogPostGeneratoer
{

    public function __construct(private AiService $aiService)
    {
        
    }
    public function generate(string $prompt):string
    {
        return $this->aiService->generatText($prompt);
    }
}
