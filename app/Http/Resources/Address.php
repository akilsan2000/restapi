<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Address extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'city' => $this->city,
            'zip_code' => $this->zip_code,
            'street' => $this->street,
            'street_number' => $this->street_number,
            'customers_id' => $this->customers_id
        ];
    }
}
