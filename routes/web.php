<?php


use Illuminate\Support\Facades\Route;
use Carbon\Carbon;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $date = Carbon::now()->toDateTimeString();
    return 'Olá, bem-vindo ao nosso site! A data e hora atuais são: ' . $date;
});

Route::get('/ola/{nome}', function ($nome) {
    return 'Olá, ' . $nome . '! Bem-vindo ao nosso site!';
});

