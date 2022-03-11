<?php

use App\Http\Controllers\ORMController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::controller(ORMController::class)->group(function () {
    Route::get('/', 'welcome');
    Route::get('/students', 'students');
    Route::get('/subjects', 'subjects');
    Route::get('/student/{student}/{subject}', 'studentDetails');
    Route::get('/subject/{student}', 'subjectStudent');
});
