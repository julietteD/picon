<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('subscribe', [ParticipationController::class, 'participate'])->name('subscribe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('participations', [AdminController::class, 'participations'])->name('admin.participations');
    Route::get('participations/new', [AdminController::class, 'editParticipation'])->name('admin.participations.new');
    Route::get('participations/edit/{id}', [AdminController::class, 'editParticipation'])->name('admin.participations.edit');
    Route::get('participations/delete/{id}', [AdminController::class, 'deleteParticipation'])->name('admin.participations.delete');
    Route::post('participations/edit', [AdminController::class, 'editParticipationAction'])->name('admin.participations.edit.action');

    Route::get('contents/', [AdminController::class, 'editContent'])->name('admin.content.edit');
    Route::post('contents/edit', [AdminController::class, 'editContentAction'])->name('admin.contents.edit.action');


});

require __DIR__.'/auth.php';
