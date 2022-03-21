<?php

use App\Http\Controllers\DealerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DealerController::class,'getAll'])->name('dealer.list');
Route::get('/create', [DealerController::class,'create'])->name('dealer.create');
Route::post('/create', [DealerController::class,'store'])->name('dealer.store');
Route::get('/{id}/edit', [DealerController::class,'edit'])->name('dealer.edit');
Route::post('/{id}/edit', [DealerController::class,'update'])->name('dealer.update');
Route::get('/{id}/delete', [DealerController::class,'delete'])->name('dealer.delete');
