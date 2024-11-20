<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login'); // Show the login view
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check the credentials against the users table (or userdetails table)
        $user = DB::table('userdetails') // Change 'userdetails' to your actual table name
                    ->where('email', $request->email)
                    ->where('password', $request->password) // Make sure you hash the password when storing it
                    ->first();

        if ($user) {
            // Store the user data in the session
            session(['user' => $user]);

            // Redirect to home or intended page
            return redirect()->intended('/home');
        }

        // If credentials are wrong, return back with error
        return back()->with('error', 'Invalid email or password');
    }

    // Handle logout
    public function logout(Request $request)
    {
        // Remove the user data from the session
        $request->session()->forget('user');
        $request->session()->flush();

        // Redirect to the login page
        return redirect('/login');
    }
}
