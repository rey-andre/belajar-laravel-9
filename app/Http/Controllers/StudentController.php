<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();
        $students = Student::paginate(2);
        return view('index', ['data' => $students]);
    }

    public function filter()
    {
        Student::where('score', '>=', 92)->get();
        return view('filter', compact('students'));
    }

    function show($id)
    {
        // $activity = Activity::find($id);
        // $students = $activity->students;
        // return view('example', ['activity' => $activity, 'students' => $students]);
        $students = Student::find($id);
        $activities = $students->activities;
        return view('example', ['activities' => $activities, 'students' => $students]);
    }
}
