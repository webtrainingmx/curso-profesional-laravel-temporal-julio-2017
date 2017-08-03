<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // $review->user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function museum()
    {
        return $this->belongsTo('App\Museum');
    }
}
