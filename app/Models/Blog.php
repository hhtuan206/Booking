<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
     protected $fillable = [
        'title', 'author', 'content','image',
    ];

    public function user()
    {
      return $this->belongsTo('App\Models\User', 'user_id');
    }
}
