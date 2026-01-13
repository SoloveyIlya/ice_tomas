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

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');

