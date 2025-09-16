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


    function updatestudent(Request $request){
        $student=Student::find($request->id);
        $student->name=$request->name;
        $student->age=$request->age;
        $student->class=$request->class;
        $student->roll=$request->roll;

        if($student->save()){
            return response()->json([
                'status'=>true,
                'message'=>'Student updated successfully'
            ]);
        }
        return response()->json([
            'status'=>false,
            'message'=>'Failed to update student'
        ]);
    }


    function deletestudent($id){
        $student=Student::find($id);
        if($student->delete()){
            return response()->json([
                'status'=>true,
                'message'=>'Student deleted successfully'
            ]);
        }
        return response()->json([
            'status'=>false,
            'message'=>'Failed to delete student'
        ]);
    
    }

    function searchstudent($name){

        $student=Student::where('name','like',"%$name%")->get();

        if($student){
            return ["result"=> $student];
        }else{
            return ["result"=>"No data found"];
        }

    }

}
