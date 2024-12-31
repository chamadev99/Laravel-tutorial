<?php

namespace App\Http\Controllers;

use App\Services\AiService;
use App\Services\ImageGenarator;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{

    //traditional way call calss and call method
    // private $imageGenarator;
    // public function __construct( ImageGenarator $imageGenarator)
    // {
    //     $this->imageGenarator =$imageGenarator;
    // } 

    //-------------------------------------------------

     //simplified constructoer

    // public function __construct(private ImageGenarator $imageGenarator)
    // {
        
    // }

   //-------------------------------------------------

    // public function test()
    // {
    //     return $this->imageGenarator->generate("hi");
    // }


   //-------------------------------------------------use __invoke

   
    // public function __invoke() 
    // {
    //     //traditional way pass two param in to the class directly
    //     
    //     $imageGenratoer= new ImageGenarator(new AiService(new Client(),"fuck me"));
    //     return $imageGenratoer->generate("dfdfdfd");
    // }

    //simplified invlike
    public function __invoke(ImageGenarator $imageGenarator)
    {
        echo "invoke 2";
        return $imageGenarator->generate("hi");
    }

  





}
