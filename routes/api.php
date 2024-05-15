<?php

use App\Domain\Book\Http\Controllers\BookController;
use App\Domain\Book\Http\Controllers\BookStoreAttachController;
use App\Domain\Book\Http\Controllers\BookStoreDetachController;
use App\Domain\Store\Http\Controllers\StoreBookAttachController;
use App\Domain\Store\Http\Controllers\StoreBookDetachController;
use App\Domain\Store\Http\Controllers\StoreController;
use App\Domain\User\Authentication\Http\Controllers\LoginController;
use App\Domain\User\Authentication\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::middleware('guest')->post('login', LoginController::class);
Route::middleware('auth:sanctum')->post('logout', LogoutController::class);

Route::middleware('auth:sanctum')->group(function () {
    // Book Registry
    Route::apiResource('books', BookController::class);
    Route::post('books/{book}/stores/{store}', BookStoreAttachController::class);
    Route::delete('books/{book}/stores/{store}', BookStoreDetachController::class);
    // Store Registry
    Route::apiResource('stores', StoreController::class);
    Route::post('stores/{store}/books/{book}', StoreBookAttachController::class);
    Route::delete('stores/{store}/books/{book}', StoreBookDetachController::class);
});
