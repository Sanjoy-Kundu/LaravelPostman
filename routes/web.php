<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostmanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/postmanTest1', [PostmanController::class, "postman_test"]);
Route::get("/form", [PostmanController::class, "create_form"]);
Route::post('/form/post', [PostmanController::class, "submit"]);



//web.php theke api dekhar jonno api/name likte hobei and sumit name method create kore postman diye data check korbo 
Route::post('/api/from/post', [ApiController::class, "submit2"]);

//notes: amra jodi api.php theke method call kori tahole amader route er first e '/api lekha lagbo na o by default dhore nibo and VerfifyCsrfToken.php teo kicu kora logbo na. now lets check api.php
