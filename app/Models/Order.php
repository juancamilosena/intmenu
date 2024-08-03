<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Añade aquí los atributos que se pueden asignar masivamente
    protected $fillable = [
        'user_id', // u otro atributo relevante que ya tengas
        'status',
        // otros atributos que quieras permitir asignar masivamente
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    // Relación con las adiciones del pedido
    public function orderAdditions()
    {
        return $this->hasMany(OrderAdicion::class);
    }

}
