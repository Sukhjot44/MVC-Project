@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Your Cart</h1>
    <div class="row">
        @if(session('cart') && count(session('cart')) > 0)
            @foreach(session('cart') as $item)
                <div class="col-md-6">
                    <div class="cart-card mb-3 p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['itemName'] }}" class="img-fluid">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col item-name"><strong>{{ $item['itemName'] }}</strong></div>
                                    <div class="col-md-2 price text-end">${{ $item['price'] }}</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">Quantity: {{ $item['quantity'] }}</div>
                                    <div class="col-2 text-end">
                                        <form action="{{ url('/cart/remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="itemName" value="{{ $item['itemName'] }}">
                                            <button type="submit" class="btn btn-danger">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
    <div class="row">
        <div class="col text-center mt-4">
            <a href="{{ route('checkout') }}" class="btn custom-btn">Checkout</a>
        </div>
    </div>
</div>
@endsection
