@extends('layouts.app')

@section('content')
<div class="container login text-center" style="max-width: 500px;">
    <h1>Welcome to <span style="color: #CC3333;">RestrO</span></h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- CSRF Token for security -->

        <h5 style="padding-bottom: 15px;">Login</h5>

        <div class="mb-3">
            <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                required
            />
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Password"
                required
            />
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="custom-btn">Login</button>
    </form>

    <a href="{{ route('register') }}">
        <p class="form-switch" id="switch-to-signup">Don't have an account? Sign up here</p>
    </a>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>
@endsection
