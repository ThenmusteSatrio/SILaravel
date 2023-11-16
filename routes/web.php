<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\FolderController;
// use App\Http\Controllers\Meeting\ntroller;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TambahStafController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|{{  }}
*/

Route::get('/', [Controller::class, 'index'])->name('/');

Route::get('/login', [AdminController::class, 'login'])->name('login');

Route::post('Auth', [AdminController::class, 'Auth'])->name('Auth');

Route::get('logout', [AdminController::class, 'logout'])->name('logout');


// Route::resource('tambahAdmin', SuperAdminController::class);

// Route::get('/tambahAdmin', [SuperAdminController::class, 'index']);
Route::get('/tambahAdmin', [SuperAdminController::class, 'lihat'])->name('lihat');
Route::get('/tambahAdmin/create', [SuperAdminController::class, 'create'])->name('create');
Route::post('/tambahAdmin/store', [SuperAdminController::class, 'store'])->name('store');
Route::get('/ied/{id}', [SuperAdminController::class, 'edit'])->name('edit');
Route::post('/tambahAdmin/{id}', [SuperAdminController::class, 'update'])->name('update');
Route::delete('/tambahAdmin/{id}', [SuperAdminController::class, 'destroy'])->name('delete');


// Route::get('/tambahStaf', [AdminController::class, 'tambahStaf']);
Route::get('/listStaf', [AdminController::class, 'listStaf'])->name('listStaf');
Route::get('/editStaf/{id}', [AdminController::class, 'editStaf'])->name('editStaf');
Route::post('/updateStaf/{id}', [AdminController::class, 'editStaf'])->name('editStaf');

Route::get('/deleteStaf/{id}', [AdminController::class, 'editStaf'])->name('editStaf');

Route::post('/tambahStaf/create', [AdminController::class, 'create']);

Route::post('/createFolder', [AdminController::class, 'createFolder'])->name('createFolder');
Route::get('dummy', function () {
   return view('layouts.dummy'); 
});




