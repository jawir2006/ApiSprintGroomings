<?php

use App\Http\Controllers\Api\SprintGroomings_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/sprint_groomings', [SprintGroomings_Controller::class, 'index']);
Route::post('sprint_groomings', [SprintGroomings_Controller::class, 'store']);
Route::get('/sprint_groomings/{id}', [SprintGroomings_Controller::class, 'show']);
Route::put('/sprint_groomings/{id}', [SprintGroomings_Controller::class, 'update']);
Route::delete('/sprint_groomings/{id}', [SprintGroomings_Controller::class, 'destroy']);