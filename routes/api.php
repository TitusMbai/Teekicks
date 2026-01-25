<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products',[ProductController::class,'index' ]);
Route::post('/products',[ProductController::class,'store' ]);


/*
|--------------------------------------------------------------------------
| Public Routes (Available to everyone)
|--------------------------------------------------------------------------
*/
Route::get('/products', [ProductController::class, 'index']);      // List all sneakers
Route::get('/products/{id}', [ProductController::class, 'show']); // View single sneaker details

/*
|--------------------------------------------------------------------------
| Protected Routes (Admin Only - Requires Token)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/products', [ProductController::class, 'store']);    // Create new sneaker
    Route::put('/products/{id}', [ProductController::class, 'update']); // Update sneaker details
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete a sneaker
    
    // User profile
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});