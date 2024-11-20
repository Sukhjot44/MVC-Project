<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/order-online', function () {
    return view('menu');
});
Route::get('/order-online', [MenuController::class, 'index'])->name('menu');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-submit', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Add functionality (e.g., saving to the database or sending an email)
    return back()->with('success', 'Message Sent!');
});

// Correct route for login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Login Page
Route::post('/login', [LoginController::class, 'login']); // Login Submission
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Logout
// Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('signin'); // Login Page


// // User Registration Route
// Route::post('/register', [SignInController::class, 'register']); // Register User

// // User Login Route
// Route::post('/login', [SignInController::class, 'login']); // Login User

Route::get('/register', [SignInController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [SignInController::class, 'register']); // Handling sign up form submission


