<?php

# Controller Halaman Backend
use App\Http\Controllers\Backend\DashboardControllerr as DashboardControllerr;

# Controller Halaman Frontend
use App\Http\Controllers\Frontend\DashboardController as DashboardFrontend;
use App\Http\Controllers\Frontend\HomeController as HomeFrontend;

# Other
use Illuminate\Support\Facades\Route;

Route::controller(HomeFrontend::class)->group(function () {
    Route::get('/', 'home')->name('frontend.home');
});
