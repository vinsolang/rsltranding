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

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/export', [ExportController::class, 'index'])->name("export");
Route::get('/import', [ImportController::class, 'index'])->name("import");
Route::get('/about', [AboutController::class, 'index'])->name("about");
Route::get('/events', [EventsController::class, 'index'])->name("events");
Route::get('/career', [CareerController::class, 'index'])->name("career");
Route::get('/contact', [ContactController::class, 'index'])->name("contact");

Route::get('/lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/rice-detail', [DetailController::class, 'rice'])->name("rice-detail");
Route::get('/coffee-detail', [DetailController::class, 'coffee'])->name("coffee-detail");
Route::get('/corn-detail', [DetailController::class, 'corn'])->name("corn-detail");
Route::get('/cashewnuts-detail', [DetailController::class, 'cashewnuts'])->name("cashewnuts-detail");
Route::get('/potatocassava-detail', [DetailController::class, 'potatocassava'])->name("potatocassava-detail");
Route::get('/mango-detail', [DetailController::class, 'mango'])->name("mango-detail");

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
