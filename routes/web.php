<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class, 'home']) -> name('home');
Route::get('/project/show/{project}', [MainController :: class, 'show']) -> name('pages.project.show');

// Route::middleware(['auth', 'verified'])
Route::middleware([])
   ->name('private.')
   ->prefix('private')
   ->group(function () {

    Route::get('/project/create/{project}', [MainController :: class, 'create']) -> name('pages.project.create');
    Route::get('/project/store/{project}', [MainController :: class, 'store']) -> name('pages.project.store');
    Route::get('/project/delete/{project}', [MainController :: class, 'delete']) -> name('pages.project.delete');
    
    Route::get('/', [MainController :: class, 'private']);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
