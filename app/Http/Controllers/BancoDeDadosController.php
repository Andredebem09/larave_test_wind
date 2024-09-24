<?php

namespace App\Http\Controllers;

use App\Models\banco_de_dados;
use Illuminate\Http\Request;

class BancoDeDadosController extends Controller
{
    public function receber()
  {
      $olegario = new banco_de_dados;
      $observar = $olegario->all();

      dd($observar);
  }
}
