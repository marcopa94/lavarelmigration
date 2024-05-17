<?php

use App\Http\Controllers\mysite;
use App\Http\Mysites\Controller;

use Illuminate\Support\Facades\Route;

Route::get('/index', [mysite::class, 'index'])->name('index');
Route::get('/create', [mysite::class, 'create'])->name('create');
Route::get('/viewSingle/{id}', [mysite::class, 'viewSingle'])->name('viewSingle');
Route::get('/update/{id}', [mysite::class, 'update'])->name('update');
Route::get('/delete/{id}', [mysite::class, 'delete'])->name('delete');
