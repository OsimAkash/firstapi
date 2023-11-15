<?php

use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\TestController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/test', [TestController::class, 'first' ]);

Route::post('/login', [TestController::class, 'login']);


// Student Api

Route::post('/addstud', [StudentApiController::class, 'addstud']);
Route::get('/getstud', [StudentApiController::class, 'getstud']);
Route::post('/updatestud/{id}', [StudentApiController::class, 'upadateStud']);
Route::post('/deletestud/{id}', [StudentApiController::class, 'deleteStud']);