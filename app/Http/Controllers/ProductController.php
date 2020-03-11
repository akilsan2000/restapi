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
        $product->title = $request->name;
        $product->information = $request->description;
        $product->save();
        return response()->json($product, 200);
    }

    public function put(Request $request) {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->availability=false;
        $product->price=0;
        $product->special_price=0;
        $product->vegetarian=false;
        $product->vegan=false;
        $product->image='';
        $product->supplier='';
        $product->article_nr=0;
        $product->category_id=0;
        $product->save();
        return response()->json($product, 200);
    }

    public function patch(Request $request) {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->availability=false;
        $product->price=0;
        $product->special_price=0;
        $product->vegetarian=false;
        $product->vegan=false;
        $product->image='';
        $product->supplier='';
        $product->article_nr=0;
        $product->category_id=0;
        $product->save();
        return response()->json($product, 200);
    }
    public function delete(Request $request) {
        $product = Product::find($request->id);
        $product->delete();
    }
}
