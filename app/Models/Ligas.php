<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ligas extends Model
{
    protected $fillable = [
        'id', 'name', 'image', 'category_id'
    ];

}
