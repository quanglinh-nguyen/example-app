<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('users', UserController::class)->middleware('cors');

// use App\Http\Controllers\Api\UserController;

// Route::get('users', [UserController::class, 'index'])->name('users.index');
// Route::post('users', [UserController::class, 'store'])->name('users.store');
// Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
// Route::match(['put', 'patch'], 'users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/demo-url', function (Request $request) {
    return response()->json(['Laravel CORS Demo']);
})->middleware('cors');
;
