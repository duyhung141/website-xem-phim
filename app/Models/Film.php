<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'image',
        'path',
        'year',
        'country_id',
        'category_id',
        'director_id',
        'actor_id',
        'is_hot',
        'is_oscar'
    ];

}
