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
        $product->active = $request->active;
        $product->article_number = $request->article_number;
        $product->title = $request->title;
        $product->summary = $request->summary;
        $product->information = $request->information;
        $product->producer_id = $request->producer_id;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->season_price = $request->season_price;
        $product->special_price = $request->special_price;
        $product->special_price_from = $request->special_price_from;
        $product->special_price_to = $request->special_price_to;
        $product->vegetarian = $request->vegetarian;
        $product->vegan = $request->vegan;
        $product->calories = $request->calories;
        $product->categories_id = $request->categories_id;
        $product->producers_id = $request->producers_id;
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
