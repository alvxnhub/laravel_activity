<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
}
