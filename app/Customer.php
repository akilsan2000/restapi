<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected  $fillable = [
        'last_name',
        'first_name',
        'password',
        'username',
        'email'
    ];
}
