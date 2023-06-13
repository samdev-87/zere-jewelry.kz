<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData['products'] = ProductController::$products;
        return view('home.index')->with('viewData', $viewData);
    }
}
