<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\WebsitesConstroller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->post('/websites/{website}/subscribe',[WebsitesConstroller::class, 'subscribe']);

Route::resource('/websites/{website}/posts',PostsController::class);



