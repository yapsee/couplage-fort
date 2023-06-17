<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/client/ajouter', [ClientController::class, 'ajouter'])->name('client.ajouter');

Route::get('/clients', [ClientController::class, 'lister'])->name('client.lister');

Route::post('/compte/creer', [CompteController::class, 'creer'])->name('compte.creer');

Route::get('/client/{client}/comptes', [CompteController::class, 'listerParClient'])->name('compte.listerParClient');
