<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData['products'] = Product::take(10)->get(); // ->inRandomOrder()
        return view('home.index')->with('viewData', $viewData);
    }
}
