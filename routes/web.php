<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas para Escolas
Route::get('/escolas', [EscolaController::class, 'index'])->name('escolas.index');
Route::get('/escolas/create', [EscolaController::class, 'create'])->name('escolas.create');
Route::post('/escolas', [EscolaController::class, 'store'])->name('escolas.store');
Route::get('/escolas/{id}', [EscolaController::class, 'show'])->name('escolas.show');
Route::get('/escolas/{id}/edit', [EscolaController::class, 'edit'])->name('escolas.edit');
Route::put('/escolas/{id}', [EscolaController::class, 'update'])->name('escolas.update');
Route::delete('/escolas/{id}', [EscolaController::class, 'destroy'])->name('escolas.destroy');


// Rotas para Turmas
Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');
Route::get('/turmas/create', [TurmaController::class, 'create'])->name('turmas.create');
Route::post('/turmas', [TurmaController::class, 'store']);
Route::get('/turmas/{turma}', [TurmaController::class, 'show']);
Route::get('/turmas/{turma}/edit', [TurmaController::class, 'edit']);
Route::put('/turmas/{turma}', [TurmaController::class, 'update']);
Route::delete('/turmas/{turma}', [TurmaController::class, 'destroy']);
Route::post('/turmas/{turma}/professores', [TurmaController::class, 'attachProfessores']);
Route::delete('/turmas/{turma}/professores/{professor}', [TurmaController::class, 'detachProfessor']);

// Rotas para Professores
Route::get('/professores', [ProfessorController::class, 'index'])->name('professores.index');
Route::get('/professores/create', [ProfessorController::class, 'create'])->name('professores.create');
Route::post('/professores', [ProfessorController::class, 'store']);
Route::get('/professores/{professor}', [ProfessorController::class, 'show']);
Route::get('/professores/{professor}/edit', [ProfessorController::class, 'edit']);
Route::put('/professores/{professor}', [ProfessorController::class, 'update']);
Route::delete('/professores/{professor}', [ProfessorController::class, 'destroy']);
