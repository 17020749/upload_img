<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
class DepartmentController extends Controller
{
    public function viewDepartment()
    {
     $user = User::all();
$user = $user->map(function($item){
    $listRole = $item->roles->map(function($role){
        return $role->name;
    });
    $item->role = $listRole;
    return $item;
});

// In kết quả
print_r(json_encode($user));

        // return view('pages.department');
    }
}

