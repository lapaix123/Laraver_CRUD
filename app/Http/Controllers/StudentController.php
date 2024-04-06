<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        return view('student.index');
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
}
