<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;
use Illuminate\Support\Facades\Redirect;

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
        $students = Student::where('score', '>=', 85)
            ->where('name', 'LIKE', '%a%')
            ->get();
        return view('filter', compact('students'));
    }

    function show($id)
    {
        // $activity = Activity::find($id);
        // $students = $activity->students;
        // return view('example', ['activity' => $activity, 'students' => $students]);
        $student = Student::find($id);
        return view('show', ['student' => $student]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'score' => 'required'
        ]);

        Student::create([
            'name' => $request->name,
            'score' => $request->score,
            'teacher_id' => 1
        ]);

        return Redirect::route('index');
    }
}
