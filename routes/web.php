<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('welcome');
