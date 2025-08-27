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

    function addstudent(Request $request){
      $student=new Student;

      $student->name=$request->name;
      $student->age=$request->age;
      $student->class=$request->class;
      $student->roll=$request->roll;

      if($student->save()){
          return response()->json([
              'status'=>true,
              'message'=>'Student added successfully'
          ]);
      }
      return response()->json([
          'status'=>false,
          'message'=>'Failed to add student'
      ]);

    }

}
