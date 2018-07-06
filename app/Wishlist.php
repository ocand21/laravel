<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = "wishlists";

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function iklan(){
      return $this->belongsTo(Iklan::class);
    }
}