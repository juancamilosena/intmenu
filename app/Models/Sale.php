<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function detalle_orden (){

        return $this->belongsTo('App\Models\Order_detail');

    }

}
