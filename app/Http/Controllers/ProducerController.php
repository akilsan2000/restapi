<?php

namespace App\Http\Controllers;

use App\Producer;
use Illuminate\Http\Request;
use App\Product;

//todo:
//- Filter
//- Authentication

class ProducerController extends Controller
{
    public function get(Request $request) {
        $producer = Producer::get();
        return response()->json($producer, 200);
    }

    public function post(Request $request) {
        $producer = new Producer();
        $producer->fill($request->all());
        $producer->save();
        return response()->json($producer, 200);
    }

    public function put(Request $request) {
        $producer = Producer::find($request->id);
        $producer->fill($request->all());
        $producer->save();
        return response()->json($producer, 200);
    }

    public function patch(Request $request) {
        $producer = Producer::find($request->id);
        $producer->fill($request->all());
        $producer->save();
        return response()->json($producer, 200);
    }

    public function delete(Request $request) {
        $producer = Producer::find($request->id);
        $producer->delete();
    }
}
