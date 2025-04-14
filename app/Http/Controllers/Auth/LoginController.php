<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm($lang){
        return view('auth.login');
    }
    
    public function login($lang,Request $request)
    {
        $credentials = $request->only('email', 'password');

        // تحقق من صحة البيانات
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();

            // التحقق من تأكيد البريد
            if (!$user->hasVerifiedEmail()) {
                Auth::logout();
                return redirect()->back()->with('verify_error', __('validate.verify_email_first'));
            }

            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('login_error', __('validate.invalid_credentials'));
    }

    public function logout($lang,Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function test($lang){
        return ("true");
    }
}
