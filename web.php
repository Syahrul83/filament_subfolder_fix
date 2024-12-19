<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// tambahkan manual di route livewire untuk mengakses file js dan update

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.assetsUrl') . '/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::get(config('app.assetsUrl') . '/livewire/update', $handle);
});



