<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classes;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function student()
    {
        $query = request('query');

        $students = Student::where("name", "like", "%$query%")->get();
        return view('student.index', compact('students'));
    }

    public function class()
    {
        $query = request('query');

        $class = Classes::where("name", "like", "%$query%")->get();
        return view('class.index', compact('class'));
    }
}
