<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        // Aquí se usa firstOrCreate para obtener un pedido existente o crear uno nuevo
        $order = Order::firstOrCreate(
            ['user_id' => auth()->id(), 'status' => 'pending'], // Condiciones para encontrar un pedido existente
            ['status' => 'pending'] // Atributos para un nuevo pedido si no se encuentra uno existente
        );

        // Lógica adicional para agregar detalles al pedido
        // Por ejemplo, podrías redirigir al usuario o devolver una vista

        return redirect()->route('some.route')->with('success', 'Pedido creado con éxito!');
    }
}
