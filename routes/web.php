<?php

use App\Http\Controllers\BancoDeDadosController;
use App\Http\Controllers\controllerteste;
use Illuminate\Support\Facades\Route;




route::get('/laravel', [controllerteste:: class, 'visao'])->name('andre.laravel');

route::get('/site', [controllerteste:: class, 'exibir']);

route::get('/bd', [BancoDeDadosController::class, 'receber'])->name('local.banco');

route::get('/create', [controllerteste::class, 'create'])->name('index.create');

route::post('/envios', [controllerteste::class, 'envios'])->name('index.envios');

route::get('/forum', [controllerteste::class, 'forum'])->name('index.forum');

route::get('/banco', [controllerteste::class, 'bancos'])->name('index.banco');

route::post('/duvidas', [controllerteste::class, 'duvida'])->name('index.duvidas');
 




 









