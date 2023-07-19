<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    function show($id)
    {
        $students = Teacher::find($id)->students;
        return view('example', ['students' => $students]);
    }
}
