<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

//todo:
//- Filter
//- Authentication

class ProductController extends Controller
{
    public function get(Request $request) {
        $products = Product::get();
        return response()->json($products, 200);
    }

    public function post(Request $request) {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return response()->json($product, 200);
    }

    public function put(Request $request) {
        $product = Product::find($request->id);
        $product->fill($request->all());
        $product->save();
        return response()->json($product, 200);
    }

    public function patch(Request $request) {
        $product = Product::find($request->id);
        $product->fill($request->all());
        $product->save();
        return response()->json($product, 200);
    }

    public function delete(Request $request) {
        $product = Product::find($request->id);
        $product->delete();
    }
}
