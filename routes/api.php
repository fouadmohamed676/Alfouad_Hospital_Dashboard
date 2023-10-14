<?php

use App\Http\Controllers\ResourceApi\ClinckController;
use App\Http\Controllers\ResourceApi\HospitalController;
use App\Http\Controllers\ResourceApi\PationsController;
use App\Http\Controllers\ResourceApi\ResourceeController;
use App\Http\Controllers\ResourceApi\LocalsController;
use App\Http\Controllers\ResourceApi\PharmacyController;
use App\Http\Controllers\ResourceApi\StaffController;
use App\Http\Controllers\ResourceApi\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| ::class,'index'
*/
Route::apiResource('/doctors', ResourceeController::class);
Route::apiResource('/pations', PationsController::class);
Route::apiResource('/locals', LocalsController::class);
Route::apiResource('/pharmacy', PharmacyController::class);
Route::apiResource('/staffs', StaffController::class);
Route::apiResource('/user',UserController::class);
Route::apiResource('/clink',ClinckController::class);
Route::apiResource('/hospital',HospitalController::class);

Route::get('/locals',[LocalsController::class,'show'])->name('locals.show');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {


    return $request->user();
});
