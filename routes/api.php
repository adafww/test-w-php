<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Controllers\DeliveryController;
use App\Controllers\OrderController;

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

// Маршрут для получения информации о заказе
Route::get('/orders/{id}', [OrderController::class, 'getOrder']);

// Маршрут для получения списка заказов
Route::get('/orders', [OrderController::class, 'getOrderList']);
