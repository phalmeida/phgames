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

        static::deleting(function ($liga) {
            $numTeams = $liga->teams()->count();
            if ($numTeams) {
                throw new \Exception("Essa liga não pode ser removida, ela possui {$numTeams} times vinculados.");
            }
        });
    }

    public function teams()
    {
        return $this->hasMany('App\Models\Teams', 'liga_id');
    }


}
