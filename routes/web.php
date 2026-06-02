<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;


// Ruta 1 - Inicio
Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');

// Ruta 2 - Sobre mi
Route::get('/sobre-mi', [PaginaController::class, 'sobreMi'])->name('sobre-mi');

// Ruta 3 - Materias
Route::get('/materias', [PaginaController::class, 'materias'])->name('materias');

// Ruta 4 - Contacto GET
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

// Ruta 5 - Contacto POST
Route::post('/contacto', [PaginaController::class, 'procesarContacto'])->name('contacto.procesar');

// Ruta 6 - Producto 
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');