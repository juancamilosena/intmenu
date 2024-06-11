<?php

namespace App\Http\Controllers;

use App\Models\Adicion;
use App\Models\Detail;
use App\Models\Product;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //
    public function carta(){
        $products = Product::all();
        $adiciones = Adicion::all();
        $detalles = Detail::all();
        // dd($productos);
        return view('User.carta', compact('products','adiciones,details'));
    }
}
