<?php

namespace App\Http\Controllers;

use App\Models\Adicion;
use App\Models\Detail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartaController extends Controller
{
  
    public function carta()
    {
        $order = Order::firstOrCreate(
            ['status' => 'pending'], 
            ['order_date' => now(), 'status' => 'pending']
        );
    
        $products = Product::all();
        $adiciones = Adicion::all();
        $pedidos = Detail::where('order_id', $order->id)->get();
    
        return view('User.carta', compact('products', 'adiciones', 'pedidos', 'order'));
    }


    public function delete($id){

        try{
            $sql=DB::delete("delete from  details where id=$id");
             

        }catch(\Throwable $th){

            $sql =0;

        }
  
        if($sql == true){
        return back()->with("correcto","su producto fue eliminado");
            }else{
        return back()->with("incorrecto","Error al eliminar ");
            
            }
        }
}
