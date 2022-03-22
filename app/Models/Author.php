<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];

    public function product()
    {
        return $this->belongsToMany(Product::class,'author_product');
    }
}
