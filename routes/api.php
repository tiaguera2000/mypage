<?php

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
Route::prefix('v1')->group(function(){

    //Route::apiResource('resume', ResumeController::class);
    Route::apiResource('resume', 'App\Http\Controllers\ResumeController');


});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
