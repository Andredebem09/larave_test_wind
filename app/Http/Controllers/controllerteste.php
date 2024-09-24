<?php

namespace App\Http\Controllers;

use App\Models\banco_de_dados;
use App\Models\suporte;
use Illuminate\Http\Request;

class controllerteste extends Controller
{
  public function visao()
  {
    $retornar = new Suporte(); // Supondo que a classe Suporte esteja corretamente definida
    $retornos = $retornar->all();
    dd($retornos);
      
  }
  public function exibir()
  {
    return view('site'); 
  }
  public function create()
  {
    return view('create');
  }
  public function envios(request $request)
  {
      dd($request->all());
  }

}