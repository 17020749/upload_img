<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role\Role;
use App\Models\Role\Permission;
use App\Models\Role\RolePermissionPage;
class DashboardController extends Controller
{
    public function view():View {
        $list = 
        User::all()->find(2)->list();
        $rolePermissionPages = RolePermissionPage::all();
    $data = new \stdClass();

foreach ($rolePermissionPages as $rolePermissionPage) {
    $permission = Permission::find($rolePermissionPage->permission_id)->name;
    $role = Role::find($rolePermissionPage->role_id)->name;
    $page = Page::find($rolePermissionPage->page_id)->name;

    if (!isset($data->{$role})) {
        $data->{$role} = new \stdClass();
    }

    if (!isset($data->{$role}->{$page})) {
        $data->{$role}->{$page} = new \stdClass();
    }

    $data->{$role}->{$page}->{$permission} = $rolePermissionPage->status;
}
        return view('dashboard',['listUser'=>User::all(), 'list' => $list, 'data'=>$data]);
    }
    public function formRequest(Request $request) {
        // dd ra nếu trạng thái checkbox thay đ
      
    }
}
