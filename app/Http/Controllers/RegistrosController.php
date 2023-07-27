<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function registro1(){
        return view('pages.registros.registro1');
    }
    public function registro2(){
        return view('pages.registros.registro2');
    }
    public function registro3(){
        return view('pages.registros.registro3');
    }
    public function registro4(){
        return view('pages.registros.registro4');
    }
    public function registro5(){
        return view('pages.registros.registro5');
    }
}
