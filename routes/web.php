<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerController;



// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', [EmployerController::class, 'index'])->name('employers.index');

// Afficher le formulaire de création d'un employé
Route::get('employers/create', [EmployerController::class, 'create'])->name('employers.create');
Route::post('employers', [EmployerController::class, 'store'])->name('employers.store');
Route::get('employers/{id}', [EmployerController::class, 'show'])->name('employers.show');
Route::get('employers/{id}/edit', [EmployerController::class, 'edit'])->name('employers.edit');
Route::put('employers/{id}', [EmployerController::class, 'update'])->name('employers.update');
Route::delete('employers/{id}', [EmployerController::class, 'destroy'])->name('employers.destroy');
