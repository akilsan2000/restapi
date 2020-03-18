<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use App\Product;

//todo:
//- Filter
//- Authentication

class CategorieController extends Controller
{
    public function get(Request $request) {
        $categorie = Categorie::get();
        return response()->json($categorie, 200);
    }

    public function post(Request $request) {
        $categorie = new Categorie();
        $categorie->fill($request->all());
        $categorie->save();
        return response()->json($categorie, 200);
    }

    public function put(Request $request) {
        $categorie = Categorie::find($request->id);
        $categorie->fill($request->all());
        $categorie->save();
        return response()->json($categorie, 200);
    }

    public function patch(Request $request) {
        $categorie = Categorie::find($request->id);
        $categorie->fill($request->all());
        $categorie->save();
        return response()->json($categorie, 200);
    }

    public function delete(Request $request) {
        $categorie = Categorie::find($request->id);
        $categorie->delete();
    }
}
