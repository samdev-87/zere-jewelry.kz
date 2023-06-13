<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [
            'title' => 'Admin Page - Products',
            'products' => Product::all(),
        ];
        return view('admin.product.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        Product::validate($request);

        $data = $request->only(['article', 'name', 'description', 'price', 'image']);
        if ($request->hasFile('image')) {
            $imageName = $request->input('article') . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $data["image"] = $imageName;
        }
        Product::create($data);

        return back();
    }

    public function edit($id)
    {
        $viewData = [
            'title' => 'Admin Page - Edit Product',
            'product' => Product::findOrFail($id),
        ];

        return view('admin.product.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        Product::validate($request);

        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            $imageName = $product->article . '.' . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->image = $imageName;
        }
        $product->save();

        return redirect()->route('admin.product.index');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }
}
