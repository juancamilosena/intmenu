<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'name',
        'adiciones',
        'comentarios',
        'precio',
        'cantidad'
    ];

    use HasFactory;
    public function mesa(){
        return $this->belongsTo('App\Models\Table');


    }
    public function orden(){
        return $this->belongsTo('App\Models\Order');
    }

   
    public function venta(){
        return $this->hasOne('App\Models\Sale');
    }

    public function producto(){
        return $this->belongsToMany('App\Models\Product');
    }
    
    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }

}
