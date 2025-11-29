<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('services', function () {
    return view('services');
})->name('services');
Route::get('singleser', function () {
    return view('singleser');
})->name('singleser');
Route::get('projects', function () {
    return view('projects');
})->name('projects');
Route::get('singlepro', function () {
    return view('singlepro');
})->name('singlepro');
