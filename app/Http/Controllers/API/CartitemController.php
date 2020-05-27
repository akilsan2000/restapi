<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Cartitem;
use Validator;
use App\Http\Resources\Cartitem as CartitemResource;

class CartitemController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartitems = Cartitem::all();
        return $this->sendResponse(CartitemResource::collection($cartitems), 'Cartitems retrieved successfully.');
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
            'products_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $cartitem = Cartitem::create($input);
        return $this->sendResponse(new CartitemResource($cartitem), 'Cartitem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartitem = Cartitem::find($id);
        if (is_null($cartitem)) {
            return $this->sendError('Cartitem not found.');
        }
        return $this->sendResponse(new CartitemResource($cartitem), 'Cartitem retrieved successfully.');
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
            'products_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $cartitem = Cartitem::find($id);
        if (is_null($cartitem)) {
            return $this->sendError('Cartitem not found.');
        }
        $cartitem->fill($input);
        $cartitem->save();
        return $this->sendResponse(new CartitemResource($cartitem), 'Cartitem updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartitem=Cartitem::find($id);
        if (is_null($cartitem)) {
            return $this->sendError('Cartitem not found.');
        }
        $cartitem->delete();
        return $this->sendResponse([], 'Cartitem deleted successfully.');
    }
}