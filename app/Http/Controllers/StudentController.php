<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function regform(){
        $students = Student::all();
         return view('student_reg',['students'=>$students]);
    }
       public function storeData(Request $request) {
        // dd($request->all());
               $request->validate([
            'email' => 'required|email|unique:students,email',
               ]);
                Student::create($request->all());
        return redirect('/reg_form')->with('message','form submitted!');
       }
   }   
