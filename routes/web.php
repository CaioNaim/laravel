<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('servicos/{nome}/{cpf}/{rg}/{CEP}', function ($nome,$cpf,$rg,$CEP) {
    return ('nome: '.$nome.'\n cpf: '.$cpf.' \n RG: '.$rg.' \n CEP: '.$CEP);
});

Route::put('/atualizarProduto/{id}','MinhaController@atualizarProduto');