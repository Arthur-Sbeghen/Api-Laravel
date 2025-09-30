<?php

use App\Models\Tarefa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/somar/{x}/{y}', function ($x, $y) {
    return $x + $y;
});

Route::get('/dividir/{x}/{y}', function ($x, $y) {
    return $x / $y;
});

Route::get('/info', function () {
    $data = [
        'nome' => 'Eusébio',
        'idade' => 63,
        'cidade' => 'Bento',
    ];
    return response()->json($data, 200);
});

Route::get('/tarefas', function () {
    return Tarefa::paginate(5);
});