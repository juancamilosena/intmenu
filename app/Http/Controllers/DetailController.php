<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function store(Request $request){
        $detalle = Detail::create($request->except(['_token','product_id']));
        $detalle->producto()->attach($request->id_producto);
    }
}
