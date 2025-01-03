<?php
namespace App\Class;
class InheritsParent{

    public $age;
    public function ParentGetName(){
        return "parent name" ;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        return $this->age=$age;
    }

}




 




