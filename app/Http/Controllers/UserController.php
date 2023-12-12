<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editProfile()
    {
        $user = session('name');
        return view('user.edit');
    }

    public function showProfileForm()
    {
        $user = Auth::user();

        return view('user.profile', ['user' => $user]);
    }

    public function editProfileForm()
    {
        $user = Auth::user();

        return view('user.edit', ['user' => $user]);
    }

    public function editProfileUpdate(Request $request)
{
    $user = User::find(auth()->user()->id);

    // Update user fields with the form data
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    // Check if a new password is provided
    $newPassword = $request->input('password');
    if ($newPassword) {
        // Hash the new password
        $user->password = bcrypt($newPassword);
    }

    // Add other fields as needed

    // Save the updated user
    $user->save();

    return redirect()->route('showProfileForm')->with('success', 'Profile updated successfully!');
}

    
}
