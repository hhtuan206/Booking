<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

     protected $fillable = [
        'subtotal', 'user_id',
    ];
    //
    
    public function billdetails()
    {
        return $this->hasMany(BillDetail::class,'bill_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
