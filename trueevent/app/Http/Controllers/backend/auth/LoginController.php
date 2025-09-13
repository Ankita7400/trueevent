<?php

namespace App\Http\Controllers\backend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function login(){
        return view('backend.auth.login');
    }

    
    public function loginstore(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email',
            'email_or_username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // $credentials = $request->only('email', 'password');
        // login with email or username
        $loginType = filter_var($request->email_or_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginType => $request->email_or_username,
            'password' => $request->password,
        ];
        // end login with email or username

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

   
    
  // Redirect based on the user's role
  if ($user->role == 1) {
    return redirect()->intended('admin/dashboard');
} else if ($user->role == 2) {
    return redirect()->intended('user/dashboard');
}

// Default redirection if no specific role matches
return redirect()->intended('dashboard');
}
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return redirect('/');
        return redirect()->route('login')->with('success', 'Logout Successfully !!!');
    }

}
