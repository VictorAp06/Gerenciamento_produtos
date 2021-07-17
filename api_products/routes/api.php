<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CidadeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function(){  
    Route::prefix('products')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('index_products');
        Route::get('/{id}', [ProductController::class, 'show'])->name('single_products');

        Route::post('/', [ProductController::class, 'store'])->name('insert_products');

        Route::put('/{id}', [ProductController::class, 'update'])->name('update_products');

        Route::delete('/{id}', [ProductController::class, 'delete'])->name('delete_products');
    });

    Route::prefix('cidades')->group(function(){
        Route::get('/', [CidadeController::class, 'index'])->name('index_cidades');
    });
});