<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function index()
    {
        $students = Student::paginate(50);
        return view('studens.index', compact('students'));
    }
}
