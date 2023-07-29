<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Db\Classroom;
class ClassroomController extends Controller
{
    public function viewClass(): View
    {
        $listClass = Classroom::all();
        return view('pages.class', ['listClass' => $listClass]);
    }
}
