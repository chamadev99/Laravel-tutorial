<?php

namespace App\Http\Controllers;

use App\Services\AiService;
use App\Services\ImageGenarator;
use App\Services\BlogPostGeneratoer;
use App\Class\EncasulationUser;
use App\Class\PholymophisumChild1;
use App\Class\PholymophisumChild2;
use App\Class\PholymophisumParent;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PholymorphisumController extends Controller
{

    public function Pholymorephysum()
    {
        $pholymorephsum = new PholymophisumChild1();      
        echo $pholymorephsum->makeSound()."</br>"; //class1

        $pholymorephsum2 = new PholymophisumChild2();      
        echo $pholymorephsum2->makeSound()."</br>"; //class2

        $pholymorephsumParent=new PholymophisumParent();
        echo $pholymorephsumParent->makeSound();
     
    }

  





}
