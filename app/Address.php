<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected  $fillable = [
        'city',
        'zip_code',
        'street',
        'street_number',
        'customers_id'
    ];
}
