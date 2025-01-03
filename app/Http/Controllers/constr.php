<?php

namespace App\Http\Controllers;

use App\Class\MemoryExample;

class constr extends Controller
{

    public function ConsADes()
    {
        // Create objects
        echo "Start of Script </br>" ;
        $obj1 = new MemoryExample("Object1", 100000); // Allocate memory
        $obj1->process();
        
        $obj2 = new MemoryExample("Object2", 200000); // Allocate more memory
        $obj2->process();
        
        // Explicitly unset object1 to free memory early
        unset($obj1);
        
        // Object2 will be destroyed at the end of the script
        echo "End of Script" ;
    }

}
