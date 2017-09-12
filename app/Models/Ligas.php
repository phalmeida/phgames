<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ligas extends Model
{
    protected $fillable = [
        'id', 'name', 'image', 'category_id'
    ];


    protected static function boot()
    {
        parent::boot();

        static::deleting(function($liga) {
            throw new \Exception("Essa área não pode ser removida, ela possui 10 conteútos vinculados.");
        });
    }





}
