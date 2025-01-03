<?php

namespace App\Http\Controllers;

use App\Class\AbstractionChild;
use App\Class\Abstraction;

class AbstractionController extends Controller
{
       public function abstraction()
    {

        $AbstractionChild = new AbstractionChild();
        echo $AbstractionChild->MakeSound()."</br>";
        echo $AbstractionChild->sleep();

        // $abstracParent =  new Abstraction();
        // echo $abstracParent->sleep()."</br>"; return error beacuse can only initiate only with sub or child class
    }
    
    
}
