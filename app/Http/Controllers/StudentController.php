<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($student)
    {
        return view('welcome', ['user'=>$student]);
         //echo $student;
         //echo " Hello from controller";
       // return ['name'=> $student, 'age'=>21];
    }
}
