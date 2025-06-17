<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller {

    public function index() {
       
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, Product $product) {
        $cart = session()->get('cart', []);
        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image_path,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Товар добавлен в корзину.');
    }

    public function remove(Request $request, Product $product) {
        $cart = session()->get('cart', []);
        unset($cart[$product->id]);
        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Товар удален из корзины.');
        
    }
}