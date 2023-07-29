<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class StudentController extends Controller
{
     public function viewStudent(): View
    {
        return view('pages.student');
    }
}
