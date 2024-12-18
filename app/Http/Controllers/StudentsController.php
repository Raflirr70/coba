<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $students = Student::paginate(10);

        return view('student.index', compact('students'));
    }
}
