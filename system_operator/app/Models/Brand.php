<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'is_active'
       ];
    

}
