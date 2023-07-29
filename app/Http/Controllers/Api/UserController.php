<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Role\RoleUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getListUser() {
        if(Auth::user()->isAdmin){
            $user = User::all();
            $data = $user->map(function($item){
                $listRole = $item->roles->map(function($role){
                  return $role->id;
                });
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'email' => $item->email,
                     'role' => $listRole->toArray()
                ];
            });
            return response()->json(
                [   
                    'status' => 200,
                    'message' => 'Xóa thành công',
                    'data' => $data
                ]
                );
        }
        else {
            abort(403,'Ban khong co quyen');
        }
    }
      public function insertUser(Request $request) {
        if(Auth::user()->isAdmin){
            $user = User::create($request->all());
            $user_id = $user->id;
            foreach($request->role as $value) {
                $insertData[] = [
                'user_id' =>  $user_id,
                'role_id' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
            DB::table('role_users')->insert($insertData);
            return response()->json(
                [   
                    'status' => 200,
                    'message' => 'Thêm thanh cong',
                    'data' => $user,
                    "role" => $request->role
                ]
                );
        }
        else {
             abort(403,'Ban khong co quyen');
        }
    }
    public function updateUser(Request $request, $id) {
        if(Auth::user()->isAdmin){
          RoleUser::where('user_id', $id)->delete();
            foreach($request->role as $value) {
            $roleUser = new RoleUser();
            $roleUser->user_id = $id;
            $roleUser->role_id = $value;
            $roleUser->save();
        }
            return response()->json(
                [   
                    'status' => 200,
                    'message' => 'Sửa thành  cong',
                ]
                ); 
        }
        else {
             abort(403,'Ban khong co quyen');
        }
    }
    public function deleteUser(Request $request, $id) {
        if(Auth::user()->isAdmin && !User::find($id)->isAdmin){
            RoleUser::where('user_id', $id)->delete();
            User::find($id)->delete();
            return response()->json(
                [   
                    'status' => 200,
                    'message' => 'Xoa thanh cong'
                ]
                );
        }
        else {
             abort(403,'Ban khong co quyen');
        }
    }

}
