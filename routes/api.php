<?php

use App\Http\Controllers\admin\DemoGraphicsController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ssoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\DemoGraphicImportController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\NotificationController;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::prefix('feedback')->group(function () {
        Route::get('/list',[FeedBackController::class,'index']);
        Route::post('/store',[FeedBackController::class,'store']);
        Route::get('/{id}',[FeedBackController::class,'show']);
    });

    Route::post("/comment/store",[CommentController::class,"store"]);
});




Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});



