<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get("register",[EmployeeController::class,"openRegister"]);

Route::post("/store",[EmployeeController::class,'store']);
Route::get("display",[EmployeeController::class,'display'])->name("display");
Route::get("delete/{id}",[EmployeeController::class,'delete']);
Route::get("editData/{id}",[EmployeeController::class,'editData']);
Route::post("update",[EmployeeController::class,'update']);


Route::post("/upload",[EmployeeController::class,'upload']);

Route::get("login",[EmployeeController::class,"loginView"]);
Route::post("/loginCheck",[EmployeeController::class,'login']);


