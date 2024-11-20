@extends('layouts.app')

@section('content')
<div class="container mt-5 menu" id="menu">
    <h5 class="text-center">Special Menu</h5>
    <h1 class="text-center">Our Specials Menu</h1>
    <div class="row">
        @foreach ($menuItems as $item)
            <div class="col-md-6">
                <div class="menu-card mb-3 p-3 ">
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
                                <div class="col">{{ $item['description'] }}</div>
                                <div class="col-2 text-end">
                                    <form action="{{ url('/cart/index') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="itemName" value="{{ $item['itemName'] }}">
                                        <input type="hidden" name="price" value="{{ $item['price'] }}">
                                        <!-- <button type="submit" class="cart_icon iconStyles btn btn-light">
                                            <i class="bi bi-cart-fill"></i>
                                        </button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <!-- <div class="col text-center mt-4">
            <a href="{{ url('/cart') }}" class="btn custom-btn" id="order-btn" style="background-color: #CC3333; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Order Now</a>
        </div> -->
    </div>
</div>
@endsection
