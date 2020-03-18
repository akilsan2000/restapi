<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartitem;

//todo:
//- Filter
//- Authentication

class CartitemController extends Controller
{
    public function get(Request $request) {
        $cartitems = Cartitem::get();
        return response()->json($cartitems, 200);
    }

    public function post(Request $request) {
        $cartitems = new Cartitem();
        $cartitems->fill($request->all());
        $cartitems->save();
        return response()->json($cartitems, 200);
    }

    public function put(Request $request) {
        $cartitems = Cartitem::find($request->id);
        $cartitems->fill($request->all());
        $cartitems->save();
        return response()->json($cartitems, 200);
    }

    public function patch(Request $request) {
        $cartitems = Cartitem::find($request->id);
        $cartitems->fill($request->all());
        $cartitems->save();
        return response()->json($cartitems, 200);
    }

    public function delete(Request $request) {
        $cartitems = Cartitem::find($request->id);
        $cartitems->delete();
    }
}
