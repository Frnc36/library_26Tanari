<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/* Összes adattag */
Route::get('/users', [UserController::class, 'index']); /* http://127.0.0.1:8000/api/users */
Route::get('/copies', [CopyController::class, 'index']);

/* Egy adott tag - a link végén szám */
Route::get('/users/{user}', [UserController::class, 'show']); /* http://127.0.0.1:8000/api/users/5 */
/* http://127.0.0.1:8000/api/users/534 hibás lesz mert nincs */
Route::get('/copies/{copy}', [CopyController::class, 'show']);/* http://127.0.0.1:8000/api/copies/5 */

Route::put('/users/{user}', [UserController::class, 'update']);
/* nincs paramétere -> Miért? */
/*                      Hol találhato       milyenfüggvény */
Route::post('/users', [UserController::class, 'store']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);

/* Book */
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);/* http://127.0.0.1:8000/api/books/3 */

Route::put('/books/{book}', [BookController::class, 'update']);

Route::post('/books', [BookController::class, 'store']);

Route::delete('/books/{book}', [BookController::class, 'destroy']);