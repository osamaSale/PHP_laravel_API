<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'images' => 'required',
            'date' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        return Product::create($request->all());
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function destroy($id)
    {
        return Product::destroy($id);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }
    public function search($name)
    {
        return Product::where('name', 'like', '%' . $name . '%')->get();
    }
}