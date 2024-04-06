<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        $students=Student::all();
        return view('student.index',['students'=>$students]);
       
    }

    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
        //dd -> dum data
        // dd($request);
        $data =$request -> validate([
            "studentId" => "required",
            "firstName" => "required",
            "lastName" => "required",
            "dob" => "required||date"       
         ]);
         $newStudent = Student::create($data);
         return redirect(route('student.index'));
    }

    public function edit(Student $student){
        return view('student.edit',['student' => $student]);
       
    }
    public function update(Student $student,Request $request){
        $data =$request -> validate([
        "studentId" => "required",
            "firstName" => "required",
            "lastName" => "required",
            "dob" => "required||date"       
         ]);

         $student ->update($data);
         return redirect(route('student.index'))->with('success','Student Updates');

    }
    public function destroy(Student $student){
        $student ->delete();
        return redirect(route('student.index'))->with('success','Student Deleted');
    }
}
