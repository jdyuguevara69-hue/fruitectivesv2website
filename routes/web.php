<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/download/android', function () {
    $file = public_path('downloads/fruitectives-v2.apk');

    if (!file_exists($file)) {
        abort(404, 'The Fruitectives V2 APK is not available yet.');
    }

    return response()->download($file, 'Fruitectives-V2.apk');
})->name('download.android');