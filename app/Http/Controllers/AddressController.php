<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

//todo:
//- Filter
//- Authentication

class AddressController extends Controller
{
    public function get(Request $request) {
        $addresses = Address::get();
        return response()->json($addresses, 200);
    }

    public function post(Request $request) {
        $addresses = new Address();
        $addresses->fill($request->all());
        $addresses->save();
        return response()->json($addresses, 200);
    }

    public function put(Request $request) {
        $addresses = Address::find($request->id);
        $addresses->fill($request->all());
        $addresses->save();
        return response()->json($addresses, 200);
    }

    public function patch(Request $request) {
        $addresses = Address::find($request->id);
        $addresses->fill($request->all());
        $addresses->save();
        return response()->json($addresses, 200);
    }

    public function delete(Request $request) {
        $addresses = Address::find($request->id);
        $addresses->delete();
    }
}
