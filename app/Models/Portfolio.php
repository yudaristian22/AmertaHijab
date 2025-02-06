<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title','description','image'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}