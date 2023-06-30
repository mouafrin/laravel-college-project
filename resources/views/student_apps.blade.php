<?php

namespace App\Http\Controllers;

use App\StudentApp;
use Illuminate\Http\Request;

class StudentAppController extends Controller
{
    public function index()
    {
        $studentApps = StudentApp::all();
        return view('student_apps.index', compact('studentApps'));
    }
}
