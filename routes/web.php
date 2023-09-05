<?php

use Illuminate\Support\Facades\Route;

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
    $nome = 'bruno';
    $arr = [1,2,3,4,5,6];
    $names = ["bruno","mateus","rocha"];
    return view('welcome',
        [
            'nome' => $nome,
            'arr' => $arr,
            'names' => $names
        ]);
});
