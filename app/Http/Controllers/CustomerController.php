<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

//todo:
//- Filter
//- Authentication

class CustomerController extends Controller
{
    public function get(Request $request) {
        $customers = Customer::get();
        return response()->json($customers, 200);
    }

    public function post(Request $request) {
        $customers = new Customer();
        $customers->fill($request->all());
        $customers->save();
        return response()->json($customers, 200);
    }

    public function put(Request $request) {
        $customers = Customer::find($request->id);
        $customers->fill($request->all());
        $customers->save();
        return response()->json($customers, 200);
    }

    public function patch(Request $request) {
        $customers = Customer::find($request->id);
        $customers->fill($request->all());
        $customers->save();
        return response()->json($customers, 200);
    }

    public function delete(Request $request) {
        $customers = Customer::find($request->id);
        $customers->delete();
    }
}
