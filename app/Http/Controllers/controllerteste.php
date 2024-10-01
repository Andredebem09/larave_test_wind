<?php

namespace App\Http\Controllers;

use App\Models\banco_de_dados;
use App\Models\suporte;
use Illuminate\Http\Request;

class controllerteste extends Controller
{
  public function visao()
  {
    $retornar = new Suporte(); 
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
      $suporte = new suporte();


      $suporte->subject = $request->subject;
      $suporte->body = $request->body;
      $suporte->save();

      }
  public function sugestao()
  {
    dd('quem?......');
  }
  public function receber()
  {
    return view('consulta_banco_prof');
  }
  
   public function bancos()
   {
     return view('banco');
   }
  
  
  public function duvida(request $pergunta)
  {
      $professor = new banco_de_dados();

      $professor->professor = $pergunta->professor;
      $professor->turma = $pergunta->turma;
      $professor->total_aluno = $pergunta->total_aluno;
      $professor->save();

      return redirect()->route('index.site');

  }
  public function consulta()
  {
    $suportes = suporte::all();

    return view('consulta', [
      'title' => 'Consulta de registros'
    ], compact('suportes'));
  }
  public function contato()
  {
    return view('formulario');
  }

  

}
//criar nova tabela no banco de dados hcode_prject e depois criar a funçao e conectar nas rotas e na blade da rota forum.