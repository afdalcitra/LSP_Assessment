<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        // Add validation logic here

        // Create and save the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Log in the user
        Auth::login($user);

        // Redirect to home or dashboard
        return redirect('/');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        // Add validation logic here

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        // Authentication failed...
        return redirect()->route('login')->with('error', 'Invalid login credentials');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }

    // Show forget password form
    public function showForgetPasswordForm()
    {
        return view('auth.forget');
    }

    // Handel forget password form

    // Show Homepage form
    public function showHomepageForm()
    {
        return view('homepage');
    }
    
}
