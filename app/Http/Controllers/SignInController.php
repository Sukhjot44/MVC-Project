<?php

namespace App\Http\Controllers;

use App\Models\UserDetail; // Import UserDetail model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('register'); // This will be the view for sign up
    }

    // Handle the registration (Sign Up) process
    public function register(Request $request)
    {
        // Validate the input fields
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:userdetails,email', // Use userdetails table
            'username' => 'required|min:3|max:20|unique:userdetails,username', // Use userdetails table
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user in the database (no password hashing, as per your request)
        $user = UserDetail::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password, // Plain text password
        ]);

        // After successful registration, redirect the user to the login page
        return redirect()->route('login')->with('success', 'Registration successful. Please log in!');
    }

    // Show the login form (if you haven't implemented it yet)
    public function showLoginForm()
    {
        return view('login'); // Your login view
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Validate the login fields
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the email and password match a record in the database
        $user = UserDetail::where('email', $request->email)
                          ->where('password', $request->password) // Password is stored in plain text as per your request
                          ->first();

        if ($user) {
            // Store user info in session (for login)
            Session::put('user', $user);
            return redirect()->route('dashboard'); // Redirect to a protected dashboard page
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
        }
    }

    // Handle logout (optional)
    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}
