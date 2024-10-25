<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home()
    {
        return view('main.home-page');
    }
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:0|confirmed',
        ]);
    
        // Create the user using mass assignment
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'bio' => 'welcome to note',
        ]);

        // User::create($request->all()); //working
    
        return redirect()->route('login-form')->with('success', 'Registration successful. You can now log in.');
    }
    


    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $userId = $user->id;
            $userId = Auth::id();
            return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully.'. $userId);
        }

        return back(); //->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-form'); //->with('success', 'Logged out successfully.');
    }
}
