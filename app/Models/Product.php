<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Relación con los detalles del pedido
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

}
