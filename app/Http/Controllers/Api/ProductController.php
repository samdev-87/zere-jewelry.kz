<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'success' => true,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->get('data');

        $catalogs = Catalog::all();
        $cat_arr = [];
        foreach ($catalogs as $catalog) {
            $cat_arr[$catalog['uuid']] = $catalog;
        }

        var_dump($cat_arr);

        foreach ($data as $item) {
            Product::updateOrCreate(
                ['uuid' => $item['uuid']],
                [
                    'name' => $item['title'],
                    'vendor' => $item['vendor'],
                    'size' => $item['size'],
                    'average_weight' => (double)$item['weight'],
                    'insert' => $item['insert'],
                    'sample' => $item['sample'],
                    'catalog_id' => array_key_exists($item['catuid'], $cat_arr) ? $cat_arr[$item['catuid']]->id : null,
                    'new' => $item['new'],
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
