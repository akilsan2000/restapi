<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartitem extends Model
{
    protected  $fillable = [
        'customers_id',
        'products_id',
        'amount'
    ];
}
