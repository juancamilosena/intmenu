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
        return view('User.carta', compact('products','adiciones'));
    }

    public function pedido(){
        $pedido=DB::select("SELECT * from details;");
        return view("user.carta")->with("pedido", $pedido);
    }


    public function delete($id){

        try{
            $sql=DB::delete("delete from  employees where id=$id");
             

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
