<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function detalle_orden (){


        return $this->hasMany('App\Models\Order_detail');


    }

   public function empleado (){


        return $this->hasMany('App\Models\Employee');


    }

}
