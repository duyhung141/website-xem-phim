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
    public function countries(){
        return $this->hasOne(Country::class);
    }

    public function directors(){
        return $this->hasOne(Director::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class,'film_actors','actor_id','film_id');
    }

    public function categories(){
        return $this->belongsToMany(Categories::class,'film_categories','category_id','film_id');
    }
}

