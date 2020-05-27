<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Address;
use Validator;
use App\Http\Resources\Address as AddressResource;

class AddressController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();
        return $this->sendResponse(AddressResource::collection($addresses), 'Addresses retrieved successfully.');
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
            'customers_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $address = Address::create($input);
        return $this->sendResponse(new AddressResource($address), 'Address created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find($id);
        if (is_null($address)) {
            return $this->sendError('Address not found.');
        }
        return $this->sendResponse(new AddressResource($address), 'Address retrieved successfully.');
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
            'customers_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $address = Address::find($id);
        if (is_null($address)) {
            return $this->sendError('Address not found.');
        }
        $address->fill($input);
        $address->save();
        return $this->sendResponse(new AddressResource($address), 'Address updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address=Address::find($id);
        if (is_null($address)) {
            return $this->sendError('Address not found.');
        }
        $address->delete();
        return $this->sendResponse([], 'Address deleted successfully.');
    }
}