<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    const SESSION_KEY_PRODUCTS = 'products';

    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get(self::SESSION_KEY_PRODUCTS);

        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $viewData = [
            'title' => 'Shopping Cart',
            'total' => $total,
            'products' => $productsInCart,
        ];

        return view('cart.index')->with("viewData", $viewData);
    }

    public function add(Request $request, $id)
    {
        $products = $request->session()->get(self::SESSION_KEY_PRODUCTS);
        $products[$id] = $request->input('quantity');
        $request->session()->put(self::SESSION_KEY_PRODUCTS, $products);
        return redirect()->route('cart.index');
    }

    public function delete(Request $request)
    {
        $request->session()->forget(self::SESSION_KEY_PRODUCTS);
        return back();
    }
}
