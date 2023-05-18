<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AddCourseApiController;
use App\Http\Controllers\API\AddCourseApiPostController;


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

Route::get('/addcourse-get', [AddCourseApiController::class, 'index']);
Route::post('/addcourse-post', [AddCourseApiPostController::class, 'index']);

