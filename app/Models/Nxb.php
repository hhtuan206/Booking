<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nxb extends Model
{
    //
    protected $fillable = ['name'];

    public function product(){
        return $this->belongsToMany(Product::clas,'nxb_product');
    }
}
