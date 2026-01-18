<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\EventsController;
use App\Http\Controllers\Frontend\ExportController;
use App\Http\Controllers\Frontend\ImportController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\OurProductController;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/export', [ExportController::class, 'index'])->name("export");
Route::get('/our_product', [OurProductController::class, 'index'])->name("our_product");
Route::get('/import', [ImportController::class, 'index'])->name("import");
Route::get('/about', [AboutController::class, 'index'])->name("about");
Route::get('/events', [EventsController::class, 'index'])->name("events");
Route::get('/career', [CareerController::class, 'index'])->name("career");
Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::post('/contact', [ContactController::class, 'send'])->name("contact.send");
Route::post('/contact/career', [ContactController::class, 'careerForm'])->name("contact.careerForm");

Route::get('/lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
