<?php

namespace App\Http\Controllers;
use App\Helpers\StaticHelper;
use App\Services\ConfigStatic;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function static(){
        echo StaticHelper::myStaticMethod()."</br>";
        echo StaticHelper::add(10,5) ."</br>";
        echo StaticHelper::subStact(10,5)."</br>";

        echo ConfigStatic::GetApiKey()."</br>";
        echo ConfigStatic::SetApi("chamatKey")."</br>";
        echo ConfigStatic::GetApiKey()."</br>";
        

    }
}
