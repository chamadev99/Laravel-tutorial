<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestContoller;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/all-user', function (Request $request) {
    return  response()->json(['data' => User::all()], 200);
});


Route::post('login', [TestContoller::class, 'login'])->name('login');

Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::middleware('auth:sanctum')->get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::apiResource('orders', OrderController::class);
