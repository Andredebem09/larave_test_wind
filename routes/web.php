<?php

use App\Http\Controllers\BancoDeDadosController;
use App\Http\Controllers\controllerteste;
use Illuminate\Support\Facades\Route;




route::get('/laravel', [controllerteste:: class, 'visao'])->name('andre.laravel');
//site é a rota principal 
route::get('/site', [controllerteste:: class, 'exibir']);

route::get('/bd', [BancoDeDadosController::class, 'receber'])->name('local.bd');

route::get('/create', [controllerteste::class, 'create'])->name('index.create');

route::post('/envios', [controllerteste::class, 'envios'])->name('index.envios');

 




 









