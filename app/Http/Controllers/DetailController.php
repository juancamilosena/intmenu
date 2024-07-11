<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Order;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function store(Request $request){
        $detalle = Detail::create($request->except(['_token','product_id']));
        $detalle->producto()->attach($request->id_producto);
        return to_route('carta');
    }


    public function detallesdeorden(Request $request){
        $detalle = Detail::create($request->except(['_token','orden_id']));
        // $detalle ->orden()->create([
        //     'estado' => $request->estado,
        //     'fecha_de_pedido' => now(),
        //     'table_id' => $request->table_id->nullable(),
        //     'detail_id' => $request->detail_id,
        // ]);
        // return to_route('carta');
        $order = Order::create([
            'estado' => $request->estado,
            'fecha_de_pedido' => now(),
            'table_id' => $request->table_id->nullable(),
            'detail_id' => $request->detail_id,
        ]);
        $order->detail()->save($order);
    }
}
