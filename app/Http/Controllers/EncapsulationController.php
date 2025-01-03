<?php

namespace App\Http\Controllers;

use App\Services\AiService;
use App\Services\ImageGenarator;
use App\Services\BlogPostGeneratoer;
use App\Class\EncasulationUser;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EncapsulationController extends Controller
{

    public function Encapsulation()
    {
        $encapsulation = new EncasulationUser("chamath");      
        echo $encapsulation->getName(); //done
        echo $encapsulation->setNAme("Navoda"); //done
        echo $encapsulation->name="kdc"; //error baeacuse cant access directly
    }

  





}
