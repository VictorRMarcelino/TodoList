<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

require __DIR__.'/settings.php';

Route::middleware(['auth', 'verified'])->group(function() {

    Route::prefix('task')->controller(TaskController::class)->group(function() {
        Route::get('/', 'getView');
        Route::post('/store', 'store');
        Route::put('/update', 'getView');
        Route::delete('/delete', 'getView');
    });
});
