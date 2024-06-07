<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
    

    public function index(){
        return view('administrador.inicio');
    }

    public function employees(){
        return view('administrador.Empleados');
    }

    
    public function food_menu(){
        return view ('administrador.Menu_de_comidas');
    }

    public function inventories(){
        return view ('administrador.Inventarios');
    }

    public function subscriber(){
        return view ('administrador.Suscriptores');
    }

    public function orders(){
        return view ('administrador.Pedidos');
    }

    public function suppliers(){
        return view ('administrador.Provedores');
    }

    public function sale(){

        return view ('administrador.Ventas');

    }


}
