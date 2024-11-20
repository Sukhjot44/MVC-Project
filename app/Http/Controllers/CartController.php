<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function index()
    {
        // Get all cart items from session
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }


    public function add(Request $request)
    {
        // Get item details from the request
        $itemName = $request->input('itemName');
        $price = $request->input('price');
        $quantity = 1; // Set default quantity as 1

        // Get current cart from session (if exists)
        $cart = session()->get('cart', []);

        // Check if the item is already in the cart
        if (isset($cart[$itemName])) {
            // Increment the quantity
            $cart[$itemName]['quantity']++;
        } else {
            // Add new item to the cart
            $cart[$itemName] = [
                'itemName' => $itemName,
                'price' => $price,
                'quantity' => $quantity
            ];
        }

        // Save the cart back to the session
        session()->put('cart', $cart);

        // Redirect back to the menu page or cart page
        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->update(['quantity' => $request->quantity]);
        return response()->json(['message' => 'Quantity updated.']);
    }

    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();
        return response()->json(['message' => 'Item removed from cart.']);
    }

    public function orderNow()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Logic for completing the order goes here

        return response()->json(['message' => 'Order placed successfully.']);
    }
}

