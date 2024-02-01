<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [
            'title' => 'Изделия',
            'products' => Product::simplePaginate(9),
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

    public function list()
    {
        $products = Product::query();

        if (!empty($_GET['categories'])) {
            $slugs = explode(',', $_GET['categories']);
            $cat_ids = Catalog::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();
            $products->whereIn('cat_id', $cat_ids);
        }

        if (!empty($_GET['price'])) {
            $prices = explode('-', $_GET['price']);
            // return $prices;
            // if(isset($prices[0]) && is_numeric($prices[0])) $prices[0]=floor(Helper::base_amount($prices[0]));
            // if(isset($prices[1]) && is_numeric($prices[1])) $prices[1]=ceil(Helper::base_amount($prices[1]));
            $products->whereBetween('price', $prices);
        }

        $viewData = [
            'title' => 'Изделия',
            'products' => $products,
        ];

        return view('product.index')->with('viewData', $viewData);
    }

    public function filter(Request $request)
    {
        $data = $request->all();
        $showURL= "";
        $catURL = "";
        $priceRangeURL="";

        if (!empty($data['categories'])) {
            foreach ($data['categories'] as $category) {
                if ($catURL == "") {
                    $catURL .= '&categories='.$category;
                } else {
                    $catURL .= ','.$category;
                }
            }
        }

        if (!empty($data['price_range'])) {
            $priceRangeURL .='&price='.$data['price_range'];
        }

        return redirect()->route('products', $catURL . $priceRangeURL);
    }

}
