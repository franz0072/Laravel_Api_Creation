<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;

// Protected route for authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// ✅ Grouping versioned API resources
Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function () {
    Route::post('invoices/bulk', [InvoiceController::class, 'bulkStore']);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
});
