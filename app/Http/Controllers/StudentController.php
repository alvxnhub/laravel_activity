<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Activity;
use Illuminate\Http\Request;

// Exercise 3: Controller Basics
class StudentController extends Controller
{
    public function index()
    {
        // Exercise 6: Model & CRUD
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function show($id)
    {
        
        return "Student ID: " . $id;

    }

    // Exercise 7: Form Handling
    public function create()
    {
        return view('studentform');
    }

   public function store(Request $request)
{
    // Exercise 8: Validation
    $validatedData = $request->validate([
        'name'  => 'required|min:3',
        'email' => 'required|email|unique:students,email',
        'age'   => 'required|numeric|min:18',
    ]);

    $student = new Student();
    $student->name  = $validatedData['name'];
    $student->age   = $validatedData['age'];
    $student->email = $validatedData['email'];
    $student->save();

    // Exercise 9 : Activity Log
    Activity::create([
        'user_id'     => auth()->id() ?? 1,
        'action'      => 'Student Created',
        'description' => 'Student ' . $student->name . ' was added successfully.',
    ]);

    return redirect('/students')->with('success', 'Student created and activity logged.');
}
}

