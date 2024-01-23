<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static array $products = [
        [
            "id"=>"1",
            "name"=>"Aliquam furniture",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusceposuere metus vitae ",
            "img" => [
                'primary' => 'product/product6.jpg',
                'secondary' => 'product/product7.jpg',
            ],
            "price" => [
                'old' => 86000,
                'current' => 60000
            ],
            'categories' => [
                'Clothing',
                'Potato chips'
            ],
        ],
    ];

    public function index()
    {
        $viewData = [
            'title' => 'Products',
            'products' => Product::all(),
        ];

        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $viewData = [
            'title' => $product['name'],
            'product' => $product,
        ];

        return view('product.show')->with('viewData', $viewData);
    }
}
