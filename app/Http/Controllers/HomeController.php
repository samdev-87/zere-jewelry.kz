<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Главная Страница - Zere";
        $viewData['catalogs'] = Catalog::all();
        $viewData['products'] = Product::where('new', 1)->get();
        return view('home.index2')->with('viewData', $viewData);
    }

    public function contacts()
    {
        $viewData = [
            'title' => 'Страница Контактов - Zere',
        ];
        return view('home.contacts')->with('viewData', $viewData);
    }

    public function collaboration()
    {
        $viewData = [
            'title' => 'Страница Сотрудничество - Zere',
        ];
        return view('home.collaboration')->with('viewData', $viewData);
    }

    public function catalogProducts(Request $request)
    {
        $menu = Catalog::all();
        $catalog = Catalog::getProductsByUuid($request->uuid);
        $recent_products = Product::orderBy('id', 'DESC')->limit(5)->get();

        $viewData = [
            'title' => 'Изделия',
            'menu' => $menu,
            'catalog' => $catalog,
            'recent_products' => $recent_products,
        ];

        return view('home.catalog-products')->with('viewData', $viewData);
    }

    public function productDetail($uuid)
    {
        $product = Product::where('uuid', $uuid)->first();

        $viewData = [
            'title' => $product->name,
            'product' => $product
        ];

        return view('home.product-detail')->with('viewData', $viewData);
    }
}
