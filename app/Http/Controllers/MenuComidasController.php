<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Adicion;
use App\Models\Detail;
use Illuminate\Http\Request;

class MenuComidasController extends Controller
{
    //
    // public function MenuComida(){
    //     return view('User.MenuComidas');
    // }

    public function MenuComida(){
        $products = Product::all();
        $adiciones = Adicion::all();
        $pedidos = Detail::all();
        return view('User.Menucomidas', compact('products','adiciones','pedidos'));
    }
}
