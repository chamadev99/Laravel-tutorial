<?php
namespace App\Class;
class EncasulationUser{
    private $name;

    public function __construct($name ){
        $this->name = $name ;        
    }

    public function getName(){
        return $this->name ;
    }

    public function setNAme($name){
        return $this->name=$name;
    }
}




