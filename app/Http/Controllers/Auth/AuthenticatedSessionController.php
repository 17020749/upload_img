<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\ValidateFormLogin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request, ValidateFormLogin $validateFormLogin): RedirectResponse
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            // RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'checkLogin' => trans(__('Tên đăng nhập hoặc mật khẩu không chính xác')),
            ]);
        }
         $user = Auth::user();
         $listRole = $user->list();
        $token = $user->createToken('api-token', $listRole->toArray())->plainTextToken;
        session(['token' => $token]);

        return redirect()->intended('/courses');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    { 
        $request->user()->tokens()->delete();
        return redirect('/');
    }
}
