<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
     protected $fillable = [
        'title', 'user_id', 'content','image',
    ];

    public function users()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
