<?php


use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalCommandController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DeskController;


/**
 * Gestão de Funcionários
 */

Route::get('/' ,[UserController::class,'index']);
Route::post('/add',[UserController::class,'store']);
Route::get('/edit/{id}',[UserController::class,'edit']);
Route::get('/search/{id}',[UserController::class,'show']);
Route::put('/update/{id}',[UserController::class,'update']);
Route::delete('/delete/{id}',[UserController::class,'destroy']);


/**
 * GESTÃO DE PEDIDOS
 */
Route::get('/' ,[DigitalCommandController::class,'index']);
Route::post('/add',[DigitalCommandController::class,'store']);
Route::post('/waiter',[DigitalCommandController::class,'bindWaiter']);
Route::get('/edit/{id}',[DigitalCommandController::class,'edit']);
Route::get('/search/{id}',[DigitalCommandController::class,'show']);
Route::put('/update/{id}',[DigitalCommandController::class,'update']);
Route::delete('/delete/{id}',[DigitalCommandController::class,'destroy']);


/**
 * Cardápio Digital
 */
Route::get('/', [MenuController::class,'index']);
Route::get('/categorias', [MenuController::class,'categorias']);
Route::get('/produtos/{id}', [MenuController::class,'show']);
Route::get('/edit/{id}',[MenuController::class,'edit']);
Route::put('/update/{id}',[MenuController::class,'update']);
Route::delete('/delete/{id}',[MenuController::class,'destroy']);


/**
 * Controle de Mesas
 */

Route::get('/', [DeskController::class,'index']);
Route::get('/produtos/{id}', [DeskController::class,'show']);


/**
 * Gestão de Clientes (CRM)
 */



/**
 * Pagamentos e Faturamento
 */
Route::get('/', [CheckoutController::class, 'index']);
Route::get('/create', [CheckoutController::class, 'create']);
Route::post('/add',[CheckoutController::class,'store']);
Route::get('/edit/{id}',[CheckoutController::class,'edit']);
Route::get('/search/{id}',[CheckoutController::class,'show']);
Route::put('/update/{id}',[CheckoutController::class,'update']);
Route::delete('/delete/{id}',[CheckoutController::class,'destroy']);


/**
 * Relatórios e Dashboard
 */

Route::get('/', [DashboardController::class, 'index']);
Route::get('/relatorios', [DashboardController::class,'relatorios']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);



