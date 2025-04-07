<?php

namespace App\Http\Controllers;

use App\Class\Practical\Boc;
use App\Class\Practical\Counter;
use App\Class\Practical\DatabaseConnection;
use App\Class\Practical\Developer;
use App\Class\Practical\EmailService;
use App\Class\Practical\UIDeveloper;
use App\Class\Practical\Employee;
use App\Class\Practical\Hnb;
use App\Class\Practical\Order;
use App\Class\Practical\QA;
use App\Class\Practical\ReportGenarater;
use Illuminate\Http\Request;
use App\Class\Practical\JsonFormatter;
use App\Class\Practical\UserNotify;

class PracticalCntroller extends Controller
{
    public function index()
    {
        //inherit
        $developer = new Developer();
        $uiDeveloper = new UIDeveloper();
        echo $developer->getName() . "<br>";
        echo $developer->bornCity() . "<br>";
        echo $developer->department() . "<br>";
        echo $developer->calSalary() . "<br>";

        echo "<br>";

        //polymorphisum
        echo $uiDeveloper->getName() . "<br>";
        echo $uiDeveloper->bornCity() . "<br>";
        echo $uiDeveloper->department() . "<br>";
        echo $uiDeveloper->calSalary() . "<br>";

        echo "<br>";
        //$employee = new Employee("John Doe", "Software Engineer", 60000);
        $qa = new QA("John Doe", "Software Engineer", 60000);
        echo $qa->getName() . "<br>";
        echo $qa->bornCity() . "<br>";
        echo $qa->department() . "<br>";
        echo $qa->calSalary() . "<br>";

        echo "<br>";
        $counter = new Counter();
        echo  $counter->increment() . "<br>";
        echo  $counter->increment() . "<br>";
        echo  Counter::showTime() . "<br>";

        // echo "<br>";
        // $databse = new DatabaseConnection();
        // echo $databse->table;

        echo "<br>";
        $order = new Order("name");
        $boc = new Boc("name");
        $hnb = new Hnb();
        echo $order->process($hnb);


        echo "<br> dependecy injection";
        $data = [
            'title' => 'Monthly Sales',
            'amount' => 12000,
            'date' => '2025-04-05'
        ];
        $json = new JsonFormatter();
        $report = new ReportGenarater($json);
        echo $report->generate($data);

        print("<br>");
        echo "<br> email service example for di <br>";
        $message = "ado bokka";
        $email = new UserNotify(new EmailService());
        echo $email->notify($message);
    }
}
