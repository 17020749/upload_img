<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
class DepartmentController extends Controller
{
    public function viewDepartment():View
    {
        return view('pages.department');
    }
}

