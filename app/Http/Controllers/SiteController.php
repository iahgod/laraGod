<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index (){
        $titulo = "Início";
        return view('home/inicio', [
            'titulo' => $titulo
        ]);
    }
}
