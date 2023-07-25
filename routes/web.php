<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsmemberDataController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CsmemberDataController::class, 'index']);

//Route::post('/savedata', function () {
//    return view('childrenservice/create');
//})->name('savedata');
//Route::post('/create','CsmemberDataController@insert');
Route::post('/savedataroute', [CsmemberDataController::class, 'create'])->name('saveitem');
//::post('/create', [CsmemberDataController::class, 'insertform']);
//Route::get('/create', 'JymemberController@create');