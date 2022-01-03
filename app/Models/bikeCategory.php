<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bikeCategory extends Model
{
    // use HasFactory;

    protected $fillable = ["title", "image", "slug"];

    public function getRouteKeyName()
    {
        return "slug";
    }



    public function bikes(){
       return $this->hasMany(Bike::class);
    }
}
