<?php

namespace App\Models;

use \Encore\Admin\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;
use FullTextSearch;
class Product extends Model
{


 protected function fullTextWildcards($term)
 {
       // removing symbols used by MySQL
   $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
   $term = str_replace($reservedSymbols, '', $term);

   $words = explode(' ', $term);

   foreach ($words as $key => $word) {
           /*
            * applying + operator (required word) only big words
            * because smaller ones are not indexed by mysql
            */
           if (strlen($word) >= 1) {
               $words[$key] = '+' . $word  . '*';
           }
       }

       $searchTerm = implode(' ', $words);

       return $searchTerm;
   }

   public function scopeFullTextSearch($query, $columns, $term)
   {
       $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $this->fullTextWildcards($term));

       return $query;
   }

   public function categories()
   {
    return $this->belongsToMany('App\Models\Category','product_category');
    }

    public function billdetails()
    {
        return $this->hasMany(BillDetail::class,'product_id');
    }

}
