<?php

namespace App\Http\Controllers;

use App\Class\InhertisChild;

class InheritsController extends Controller
{
       public function getUserName()
    {

        $childInhertis = new InhertisChild();
        echo $childInhertis->getName() ."</br>";
        echo $childInhertis->ParentGetName() . '</br>';
        $childInhertis->setAge(50);
        echo $childInhertis->getAge();
 
    }
    
    
}
