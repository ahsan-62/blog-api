<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    function students(){
        $student=Student::all();
        return $student;
    }

    function addstudent(Request $req){
      return $req->input();
    }
 
}
