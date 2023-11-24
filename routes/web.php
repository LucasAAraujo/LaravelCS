<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', ProdutoController::class);
Route::get('/', [SiteController::class,'index'])->name('site.index');
