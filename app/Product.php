<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable = [
        'active',
        'article_number',
        'title',
        'summary',
        'information',
        'producer_id',
        'stock',
        'price',
        'season_price',
        'special_price',
        'special_price_from',
        'special_price_to',
        'vegetarian',
        'calories',
        'categories_id',
        'producers_id'
    ];
}
