<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;

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

// header('Access-Control-Allow-Origin: *');  
// header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Content-Type, X-XSRF-Token, Origin');

Route::get('/', [BaseController::class, 'index']);
Route::post('/add', [BaseController::class, 'store']);
Route::delete('/delete', [BaseController::class, 'delete']);


