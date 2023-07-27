<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CajasController extends Controller
{
    public function caja1(){
        return view('pages.cajas.caja1');
    }
    public function caja2(){
        return view('pages.cajas.caja2');
    }
    public function caja3(){
        return view('pages.cajas.caja3');
    }
    public function caja4(){
        return view('cajas.pages.caja4');
    }
    public function caja5(){
        return view('cajas.pages.caja5');
    }
    public function caja6(){
        return view('cajas.pages.caja6');
    }
}
