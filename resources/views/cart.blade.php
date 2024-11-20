@extends('layouts.app')

@section('content')
<div class="container cart">
    <h1>My Cart</h1>

    @if($cartItems->isEmpty())
        <p>Your cart is empty!</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <a href="{{ route('cart.updateQuantity', $item->id) }}" class="btn btn-primary">Update Quantity</a>
                            <a href="{{ route('cart.remove', $item->id) }}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <p>Total: ${{ $cartItems->sum('price') }}</p>
            <form action="{{ route('cart.order') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Place Order</button>
            </form>
        </div>
    @endif
</div>
@endsection
