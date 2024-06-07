<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuComidasController extends Controller
{
    //
    public function MenuComida(){
        return view('User.MenuComidas');
    }
}
