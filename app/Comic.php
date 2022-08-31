<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'thumb',
        'title',
        'type',
        'sale_date',
        'series',
        'description',
        'price'
    ];
}
