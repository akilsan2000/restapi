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
        return response()->json($products, 200,[],JSON_NUMERIC_CHECK);
    }

    public function post(Request $request) {
        $products = new Product();
        $products->fill($request->all());
        $products->save();
        return response()->json($products, 200,[],JSON_NUMERIC_CHECK);
    }

    public function put(Request $request) {
        $products = Product::find($request->id);
        $products->fill($request->all());
        $products->save();
        return response()->json($products, 200,[],JSON_NUMERIC_CHECK);
    }

    public function patch(Request $request) {
        $products = Product::find($request->id);
        $products->fill($request->all());
        $products->save();
        return response()->json($products, 200,[],JSON_NUMERIC_CHECK);
    }

    public function delete(Request $request) {
        $product = Product::find($request->id);
        $product->delete();
    }
}
