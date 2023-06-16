<?php

// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

        //To get view on web
// Route::get('/about', function () {
//     return view('about');
// });

        //To get String on web
// // Route::get('/About', function () {
// //     return 'We are developers';
// // });


use Illuminate\Support\Facades\Route;


// Route::get('/test', function () {
//     return 'Hello';
// });
 
Route::get('/greeting', function () {
    return 'Hello World';
});
