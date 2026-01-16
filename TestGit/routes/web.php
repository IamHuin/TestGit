<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcomeas', function () {
    return view('welcome');
});
