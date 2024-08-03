<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'product_id',
        'adicion_id',
        'cantidad',
        'comentarios',
        'order_id', // Asegúrate de que 'order_id' esté aquí
    ];

    use HasFactory;
    public function mesa(){
        return $this->belongsTo('App\Models\Table');


    }
    public function orden(){
        return $this->hasOne('App\Models\Order');
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
