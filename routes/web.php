<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\School;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
Route::resource('schools', SchoolController::class);
require __DIR__.'/auth.php';



Route::group([], function () {
    Route::get('/schools/admin', function () {
        $schools = School::all();
        return view('schools.admin', compact('schools'));
    });
})->middleware([RoleMiddleware::class . 'admin']);
