<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Producer;
use Validator;
use App\Http\Resources\Producer as ProducerResource;

class ProducerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers = Producer::all();
        return $this->sendResponse(ProducerResource::collection($producers), 'Producers retrieved successfully.');
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

        $address = Producer::create($input);
        return $this->sendResponse(new ProducerResource($address), 'Producer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Producer::find($id);
        if (is_null($address)) {
            return $this->sendError('Producer not found.');
        }
        return $this->sendResponse(new ProducerResource($address), 'Producer retrieved successfully.');
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
        $address = Producer::find($id);
        if (is_null($address)) {
            return $this->sendError('Producer not found.');
        }
        $address->fill($input);
        $address->save();
        return $this->sendResponse(new ProducerResource($address), 'Producer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address=Producer::find($id);
        if (is_null($address)) {
            return $this->sendError('Producer not found.');
        }
        $address->delete();
        return $this->sendResponse([], 'Producer deleted successfully.');
    }
}