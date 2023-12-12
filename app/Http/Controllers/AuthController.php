<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    // Show login form
    public function viewLogin()
    {

        $role = session('role');

        if ($role == "admin") {
            return redirect('/homepage');
        } else if ($role == "customer") {
            return redirect('/homepage');
        } else {
            return view('auth.login');
        }
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Check user's role and redirect accordingly
            if ($user->role === 'customer') {
                return redirect()->intended('/homepage'); // Redirect to homepage for customers
            } elseif ($user->role === 'admin') {
                return redirect()->intended('/forget'); // Redirect to adminpage for admins
            }
        }
        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'customer') {
            return redirect()->route('home'); // Adjust the route name based on your setup
        }

        return redirect()->intended($this->redirectPath());
    }




















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
