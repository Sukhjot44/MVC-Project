@extends('layouts.app')

@section('content')
    <div class="container login text-center" style="max-width: 500px;">
        <h1>Welcome to <span style="color: #CC3333;">RestrO</span></h1>

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h5 style="padding-bottom: 15px;">Sign Up</h5>
            <div class="mb-3">
                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email"
                    name="email"
                    value="{{ old('email') }}"
                />
                @error('email')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <input
                    type="text"
                    class="form-control @error('username') is-invalid @enderror"
                    placeholder="Username"
                    name="username"
                    value="{{ old('username') }}"
                />
                @error('username')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password"
                    name="password"
                />
                @error('password')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <input
                    type="password"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    placeholder="Confirm Password"
                    name="password_confirmation"
                />
                @error('password_confirmation')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="custom-btn">Sign Up</button>
        </form>

        <a href="{{ route('login') }}">
        <p class="form-switch" id="switch-to-login">Already have an account? Login here</p>
    </a>
    </div>
@endsection
