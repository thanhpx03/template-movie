<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.client');
});


Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('movie', function () {
            $title = 'MOVIE - ADMIN';
            return view('admin.dashboard', compact('title'));
        })->name('movie');

        Route::get('table', function () {
            return view('admin.table');
        })->name('table');
    });