<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
 
Route::group([
    //'middleware' => 'api',
    'prefix' => 'auth',
    //'middleware' => ['auth:api','role:writer'] // Permisos por rol
    //'middleware' => ['permission:unpublish articles'] // Permisos por permiso
    //'middleware' => ['auth:api'] // Permisos por política
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); //->middleware('auth:api')
    Route::post('/refresh', [AuthController::class, 'refresh'])->name('refresh'); //->middleware('auth:api')
    Route::post('/me', [AuthController::class, 'me'])->name('me'); //->middleware('auth:api')
}); 
