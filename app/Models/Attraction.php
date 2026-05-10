<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $table = 'attractions';
    protected $fillable = ['country_name', 'name', 'description', 'image_url'];
}