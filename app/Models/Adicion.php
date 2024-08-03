<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adicion extends Model
{
    use HasFactory;
       public function orderAdditions()
       {
           return $this->hasMany(OrderAdicion::class);
       }
}
