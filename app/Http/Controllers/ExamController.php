<?php

namespace App\Http\Controllers;

use App\Class\AbstractionChild;
use App\Class\Developer;
use App\Class\Employee;
use App\Class\EmployeeFamily;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //

    public function index()
    {
        $employee = new Employee("chamath", "developer", 1000);
        // echo "age" .$employee->age; //access age property it only can aces when property is a public

        // $employee->setName("piyamal");

        // $family = new EmployeeFamily("kalubovila", "nawoda");
        // $family->setEmpName("chama");
        // echo "chamath :" . $employee->work() . "\n";
        // echo "wife :" . $family->work() . "\n";
        // echo "family" . $family->familyInfo();

        //abstraction
        // cannot access directly only from checlid class
        // $develoer = new Developer();
        // echo $develoer->MakeSound() . "\n";
        // echo $develoer->sleep() . "\n"; //access parent class function

        $abstractionChild = new AbstractionChild();
        echo $abstractionChild->MakeSound() . "\n";
        echo $abstractionChild->sleep() . "\n"; //access parent class function





    }
}
