
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PertunjukanController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/jadwal', [HomeController::class, 'schedule'])->name('schedule');

Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::get('/booking/{id}', [HomeController::class, 'booking'])->name('booking');

Route::post('/booking/{id}', [HomeController::class, 'storeBooking'])->name('booking.store');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/products', [HomeController::class, 'products']);

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('pertunjukan', PertunjukanController::class);
});


require __DIR__.'/auth.php';
