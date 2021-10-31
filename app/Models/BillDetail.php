<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
     protected $fillable = [
        'product_id', 'bill_id', 'quantity',
    ];

    public function product()
    {
       return $this->belongsTo(Product::class,'product_id');
    }

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'bill_id');
    }
}
