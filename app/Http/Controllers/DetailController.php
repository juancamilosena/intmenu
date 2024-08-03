<?php

namespace App\Http\Controllers;

use App\Models\Adicion;
use App\Models\Detail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DetailController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'adicion_id' => 'nullable|exists:adicions,id',
            'cantidad' => 'required|integer|min:1',
            'comentarios' => 'nullable|string',
            'order_id' => 'nullable|exists:orders,id',
        ]);

        // Si no se proporciona un order_id, crear uno nuevo
        if (empty($validatedData['order_id'])) {
            $order = Order::create([
                'user_id' => Auth::id(), // Asignar el ID del usuario autenticado
                'order_date' => Carbon::now(), // Establecer la fecha actual
                'status' => 'pending', // Establecer el estado por defecto
            ]);
            $validatedData['order_id'] = $order->id;
        }

        // Crear un nuevo detalle
        Detail::create($validatedData);

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('carta')->with('success', 'Producto añadido al pedido con éxito.');
    }

    public function showProductModal($productId)
    {
        // Obtener el producto y sus adiciones
        $product = Product::findOrFail($productId);
        $adiciones = Adicion::all();
        
        // Obtener el pedido actual del usuario o crear uno nuevo
        $order = Order::where('user_id', Auth::id())->where('status', 'pending')->first();
        if (!$order) {
            $order = Order::create([
                'user_id' => Auth::id(),
                'order_date' => Carbon::now(),
                'status' => 'pending',
            ]);
        }

        // Pasar los datos a la vista
        return view('carta', compact('product', 'adiciones', 'order'));
    }
}



