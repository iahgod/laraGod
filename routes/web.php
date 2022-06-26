<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\LoginController;use App\Http\Controllers\RegistroController;

Route::get('/', [SiteController::class, 'index']);

Route::prefix('/tarefas')->group(function(){
    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list')->middleware('auth');

    Route::get('/add', [TarefasController::class, 'add'])->name('tarefas.add');
    Route::post('/add', [TarefasController::class, 'addAction']);

    Route::get('/edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit');
    Route::post('/edit/{id}', [TarefasController::class, 'editAction'])->name('tarefa.editAction');

    Route::get('/del/{id}', [TarefasController::class, 'del'])->name('tarefas.del');

    Route::get('/status/{id}', [TarefasController::class, 'status'])->name('tarefas.status');
});

Route::prefix('/user')->group(function(){
    Route::get('/registro', [RegistroController::class, 'index'])->name('registro.index');
    Route::post('/registro', [RegistroController::class, 'Registro'])->name('registro.action');

    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login',[LoginController::class, 'login'])->name('login.action');
});

