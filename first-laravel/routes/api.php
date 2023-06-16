<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; // To use testcontroller 

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


// Route::middleware('auth:sanctum')->get('/ussser', function (Request $request) {
//     $request->user();
// });

        // To get string throgh API
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return ["users"];//$request->user();
// });

        // To post String
// Route::post('/test', function () {
//     return 'Hello';
// });

        // To post view
// Route::post('/test', function () {
//     return view('test');
// });

        // To post data in a controller
    Route::post('/test', [TestController::class, 'store']);
    
        // To get data in a controller
    Route::get('/test', [TestController::class, 'index']);

        // To update data in a controller
    Route::put('/test/{id}', [TestController::class, 'update']);

    // To update data in a controller
    Route::delete('/test/{id}', [TestController::class, 'delete']);

