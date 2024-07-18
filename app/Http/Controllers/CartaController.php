<?php

namespace App\Http\Controllers;

use App\Models\Adicion;
use App\Models\Detail;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //
    public function carta(){
        $products = Product::all();
        $adiciones = Adicion::all();
        $pedidos = Detail::all();
        return view('User.carta', compact('products','adiciones','pedidos'));
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
