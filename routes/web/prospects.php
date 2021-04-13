<?php


use App\Http\Controllers\Admin\Prospects\ProspectsController;

//Prefix: prospects
//name: admin.prospects.crete

Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');

Route::post('/', [ProspectsController::class, 'store'])->name('store');