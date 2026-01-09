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

