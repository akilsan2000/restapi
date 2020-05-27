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
        'stock',
        'price',
        'season_price',
        'special_price',
        'special_price_from',
        'special_price_to',
        'vegetarian',
        'vegan',
        'calories',
        'category_id',
        'producer_id'
    ];
}
