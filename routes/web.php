<?php
use App\Http\Controllers\PholymorphisumController;
use App\Http\Controllers\EncapsulationController;
use App\Http\Controllers\InheritsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// class Stadium{
//     protected $name;
//     public function __construct($name){
//        $this->name = $name;
//     }

//     public function getName($lastname){
//         return $this->name. " ".$lastname;
//     }
// }

// class Football {

//     public function __construct(Stadium $stadium){
//         $this->stadium = $stadium;
//     }
// }

// //create a class
// class Game {
//     public function __construct(Football $football){
//         $this->football = $football;
//     }
// }


// app()->bind('Game',function(){
//     return new Game (new Football(new Stadium));
// });

// app()->instance('Game',function(){
// return 'Instance';
// });

// dump(app()->make('Game'));
// dump(resolve('Game'));


// //bind with singleton example 
// app()->bind('random',function(){
//     return Str::random();
// });

// dump(app()->make('random')); //generate two different  output when use bind

// app()->singleton('randomSingleton',function(){
//     return Str::random();
// });

// dump(app()->make('randomSingleton'));// generate one output whe use singleton


// app()->scoped('randomScoped',function(){
//     return Str::random();
// });

// dump(app()->make('randomScoped'));// generate one output whe use scoped
// dump(app());



Route::get('/', function () {
  // $stadium =  new Stadium("SugathaDasa");
  // return $stadium->getName("Stadium");
   // die($Stadium::class);
    return view('welcome');
});

Route::get('/test',TestController::class);//call involk method direct
//Route::get('/test', [TestController::class, 'test']);//call controler function

Route::get('/user', [UserController::class,'getUserName']);

Route::get('/encapsulation', [EncapsulationController::class,'Encapsulation']);
Route::get('/inherits', [InheritsController::class,'getUserName']);
Route::get('/pholymorephisum', [PholymorphisumController::class,'Pholymorephysum']);
