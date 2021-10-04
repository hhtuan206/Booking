<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
   
    protected $casts = [
        'content' =>'json',
    ];

    public function getColumnNameAttribute($value)
    {
        return json_decode($value);
    }

    public function setColumnNameAttribute($value)
    {
        $this->attributes['content'] = json_encode(array_values($value));
    }

    

}
