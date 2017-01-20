<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'steps',
        'ingredients',
        'time',
        'persons',
        'image',
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
