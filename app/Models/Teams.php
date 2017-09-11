<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = [
        'id', 'nome', 'image', 'liga_id'
    ];

}
