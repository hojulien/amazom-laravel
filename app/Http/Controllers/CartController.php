<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, string $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []); // grabs old cart

        // if $cart[$id] is already set, increases its quantity
        // else, assigns a new entry
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'quantity' => $quantity,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image
            ];
        }

        // updates cart with new values
        session()->put('cart', $cart);

        return redirect()->back()->with('success', '"' . $product->name . '" has been added to the cart.');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart has been cleared.');
    }
}
