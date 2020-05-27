<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Customer;
use Validator;
use App\Http\Resources\Customer as CustomerResource;

class CustomerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return $this->sendResponse(CustomerResource::collection($customers), 'Customers retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $address = Customer::create($input);
        return $this->sendResponse(new CustomerResource($address), 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Customer::find($id);
        if (is_null($address)) {
            return $this->sendError('Customer not found.');
        }
        return $this->sendResponse(new CustomerResource($address), 'Customer retrieved successfully.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update($id, Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $address = Customer::find($id);
        if (is_null($address)) {
            return $this->sendError('Customer not found.');
        }
        $address->fill($input);
        $address->save();
        return $this->sendResponse(new CustomerResource($address), 'Customer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address=Customer::find($id);
        if (is_null($address)) {
            return $this->sendError('Customer not found.');
        }
        $address->delete();
        return $this->sendResponse([], 'Customer deleted successfully.');
    }
}