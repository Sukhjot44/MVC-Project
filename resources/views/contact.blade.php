@extends('layouts.app')

@section('content')
<div class="contact-area" id="contact-us" style="margin-top: 50px;">
    <div class="contact container mt-5">
        <h5 class="text-center">We're here for You</h5>
        <h2 class="text-center">Contact Us</h2>

        <form action="{{ url('/contact-submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]+" value="{{ old('phone') }}" required>
                @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea id="message" name="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
                @error('message') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <button type="submit" class="custom-btn">Submit</button>
            @if(session('success'))
                <div class="success-message mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
