<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role\Role;
use App\Models\Role\Permission;
use App\Models\Role\RolePermissionPage;
use App\Models\Page;
use App\Models\Role\RoleUser;

class RoleController extends Controller
{
    public function viewRole():View
    {
    $listUser = User::all();
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
        return view('pages.role',['data' => $data, 'listUser' => $listUser]);
    }

    public function updateRole(Request $request) {
        foreach (RolePermissionPage::all() as $item) {
            $permission = Permission::find($item->permission_id)->name;
            $role = Role::find($item->role_id)->name;
            $page = Page::find($item->page_id)->name;
            $inputName= $role.$page.$permission;
            if(!$item->status){
                if($request->has($inputName)) {
                 $item->status = true;
                    $item->save();
                }
            }
             else {
                if(!$request->has($inputName))
                {
                    $item->status = false;
                    $item->save();
                }
            }
        }
        
         return redirect()->back();
    }
}
