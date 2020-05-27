<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'active' => $this->active,
            'article_number' => $this->article_number,
            'title' => $this->title,
            'summary' => $this->summary,
            'information' => $this->information,
            'stock' => $this->stock,
            'price' => $this->price,
            'season_price' => $this->season_price,
            'special_price' => $this->special_price,
            'special_price_from' => $this->special_price_from,
            'special_price_to' => $this->special_price_to,
            'vegetarian' => $this->vegetarian,
            'vegan' => $this->vegan,
            'calories' => $this->calories,
            'category_id' => $this->category_id,
            'producer_id' => $this->producer_id,
        ];
    }
}
