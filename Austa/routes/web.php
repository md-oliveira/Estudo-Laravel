<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;

Route::post('/insert',[ProdutoController::class ,'Insert']);

Route::post('/login',[UserController::class ,'Verificar']);

Route::get('/listar',[ProdutoController::class ,'Listar']);

Route::post('/excluirProd',[ProdutoController::class,'Excluir']);

Route::post('/UptProd',[ProdutoController::class,'Atualizar']);

Route::post('/NewUsu',[UserController::class,'CriaUsu']);


Route::post('/sair', [UserController::class,'sair']);


Route::get('/capturaUpt', function(){
    return view('capturaUpt');
});

Route::get('/CriaUsu', function(){
    return view('CriaUsu');
});

Route::get('/listarUpt', function(){
    return view('listarUpt');
});

Route::get('/listarDel', function(){
    return view('delProd');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});



Route::get('/cada',function(){
    return view('cada');
});



