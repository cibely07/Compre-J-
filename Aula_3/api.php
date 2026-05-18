<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ItemPedidoController;

Route::apiResource('pedidos', PedidoController::class);
Route::apiResource('itens-pedido', ItemPedidoController::class);
