<?php

use App\Models\Banner;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Получаем только активные баннеры, отсортированные по порядку
    $banners = Banner::where('is_active', true)
        ->orderBy('order', 'asc')
        ->get();

    return view('home', [
        'banners' => $banners
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

