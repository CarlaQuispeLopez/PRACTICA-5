<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;

Route::get('/personas/create', [PersonaController::class, 'create']);
Route::post('/personas', [PersonaController::class, 'store']);
;
