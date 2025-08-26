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