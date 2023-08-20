<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ValidateFormLogin;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
class AuthTokenController extends Controller
{
    public function login(Request $request, ValidateFormLogin $validateFormLogin){
            $user = User::where('email', $request->email)->first();
            if(!$user) {
                return response()->json(
                    abort(401, 'Tài khoản không tồn tại')
                );
            }
            else {
                if(!Hash::check($request->password, $user->password)){
                     return response()->json(
                          abort(401, 'Mật khẩu không chính xác')
                );
                }
               
                 $listRole = $user->list();
                $token = $user->createToken('api-token', $listRole->toArray())->plainTextToken;
                session(['api_token' => $token]);

    // Tạo cookie với token
        $cookie = cookie('api_token', $token, 60); 
                 return response()->json(
                [
                    'status' => 200,
                    'message' => 'Đăng nhập thành công',
                    'token'=> $token,
                ]
                )->withCookie($cookie);
            }
    }
}
