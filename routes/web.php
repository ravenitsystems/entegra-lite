<?php

use Illuminate\Support\Facades\Route;

Route::get('/{vue_capture?}', function () {
    return view('application');
})->where('vue_capture', '[\/\w\.-]*');
