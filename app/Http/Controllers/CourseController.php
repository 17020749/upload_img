<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class CourseController extends Controller
{
    public function viewCourses(): View
    {
        return view('pages.courses');
    }
}
