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
        $viewData["title"] = "Home Page - Online Store";
        $viewData['catalogs'] = Catalog::all();
        $viewData['products'] = Product::take(4)->where('new', 1)->get();
        return view('home.index2')->with('viewData', $viewData);
    }
}
