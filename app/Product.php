<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'prod_id';
    public $timestamps = false;
    protected $fillable = [
        'prod_name',
        'prod_price',
        'prod_cat'
    ];
    protected $guarded = [];
}
