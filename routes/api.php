<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/post",function(){
    return ["name"=>"Ahsan","Age"=>"15"];
});


Route::get('/students',[StudentController::class,'students']);
Route::post('/add-students',[StudentController::class,'addstudent']);
Route::put('/update-students',[StudentController::class,'updatestudent']);
Route::delete('/delete-students/{id}',[StudentController::class,'deletestudent']);
Route::get('/search/{name}',[StudentController::class,'searchstudent']);
