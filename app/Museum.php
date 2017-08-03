<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $table = "museums";

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
