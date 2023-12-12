<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //Dashboard
    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $members = User::where('role', 'member')->get();

        return view('admin.dashboard', ['members' => $members]);
    }
}
