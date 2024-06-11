<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function store(Request $request){
        $detalle = Detail::create($request->except(['_token','id_producto']));
        $detalle->producto()->attach($request->id_producto);
    }
}
