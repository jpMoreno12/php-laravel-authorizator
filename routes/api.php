<?php

use App\Http\Controllers\AuthorizatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/getPermissions', [AuthorizatorController::class, 'grantPermissions']);
