<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;


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

//? Default Route 
Route::get('/', [Controller::class, 'index'])->name('/');

//! Route for Authentication 
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('Auth', [AdminController::class, 'Auth'])->name('Auth');

//! Route for logout
Route::get('logout', [AdminController::class, 'logout'])->name('logout');


//? Route for Super Admin
Route::get('/tambahAdmin', [SuperAdminController::class, 'lihat'])->name('lihat');
Route::get('/tambahAdmin/create', [SuperAdminController::class, 'create'])->name('create');
Route::post('/tambahAdmin/store', [SuperAdminController::class, 'store'])->name('store');
Route::get('/editAdmin/{id}', [SuperAdminController::class, 'edit'])->name('edit');
Route::post('/editAdmin/{id}', [SuperAdminController::class, 'update'])->name('update');
Route::delete('/deleteAdmin/{id}', [SuperAdminController::class, 'destroy'])->name('delete');


//? Route for Admin
Route::get('/listStaf', [AdminController::class, 'listStaf'])->name('listStaf');
Route::get('/editStaf/{id}', [AdminController::class, 'editStaf'])->name('editStaf');
Route::post('/updateStaf/{id}', [AdminController::class, 'editStaf'])->name('editStaf');
Route::get('/deleteStaf/{id}', [AdminController::class, 'editStaf'])->name('editStaf');
Route::post('/tambahStaf/create', [AdminController::class, 'create']);
Route::post('/createFolder', [AdminController::class, 'createFolder'])->name('createFolder');

//? Route for Staf



//! Route for Dummy
Route::get('dummy', function () {
   return view('layouts.dummy');
});
