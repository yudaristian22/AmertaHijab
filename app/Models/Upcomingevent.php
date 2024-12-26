<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcomingevent extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'image', 'short_description', 'content'];
}
