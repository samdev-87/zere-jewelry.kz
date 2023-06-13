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
        [
            "id"=>"2",
            "name"=>"Dummy animal",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusceposuere metus vitae ",
            "img" => [
                'primary' => 'product/product8.jpg',
                'secondary' => 'product/product9.jpg',
            ],
            "price" => 65000,
            'categories' => [
                'Clothing',
                'Potato chips'
            ],
        ],
        [
            "id"=>"3",
            "name"=>"Furniture",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusceposuere metus vitae ",
            "img" => [
                'primary' => 'product/product10.jpg',
                'secondary' => 'product/product11.jpg',
            ],
            "price" => 86000,
            'categories' => [
                'Women',
            ],
        ],
        [
            "id"=>"4",
            "name"=>"Letraset animal",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusceposuere metus vitae ",
            "img" => [
                'primary' => 'product/product12.jpg',
                'secondary' => 'product/product13.jpg',
            ],
            "price" => [
                'old' => 86000,
                'current' => 70000
            ],
            'categories' => [
                'Men',
            ],
        ],
        [
            "id"=>"5",
            "name"=>"Duis pulvinar",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusceposuere metus vitae ",
            "img" => [
                'primary' => 'product/product14.jpg',
                'secondary' => 'product/product15.jpg',
            ],
            "price" => [
                'old' => 86000,
                'current' => 70000
            ],
            'categories' => [
                'Women',
            ],
        ],
        [
            "id"=>"6",
            "name"=>"Aliquam furniture",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusceposuere metus vitae ",
            "img" => [
                'primary' => 'product/product16.jpg',
                'secondary' => 'product/product17.jpg',
            ],
            "price" => [
                'old' => 86000,
                'current' => 60000
            ],
            'categories' => [
                'Women',
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
