<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestseller extends Model
{
    protected $fillable = [
        'product','price','image'
    ];
}
