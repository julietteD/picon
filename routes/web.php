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



Route::get('language/{locale}', [ParticipationController::class, 'setLocaleLang'])->name('home');

Route::get('/', [ParticipationController::class, 'welcome'])->name('home');
Route::get('/privacy', [ParticipationController::class, 'privacy'])->name('privacy');
Route::get('/about', [ParticipationController::class, 'about'])->name('about');


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

    Route::get('calendars', [AdminController::class, 'calendars'])->name('admin.calendars');
    Route::get('calendars/new', [AdminController::class, 'editCalendar'])->name('admin.calendars.new');
    Route::get('calendars/edit/{id}', [AdminController::class, 'editCalendar'])->name('admin.calendars.edit');
    Route::get('calendars/delete/{id}', [AdminController::class, 'deleteCalendar'])->name('admin.calendars.delete');
    Route::post('calendars/edit', [AdminController::class, 'editCalendarAction'])->name('admin.calendars.edit.action');

    Route::get('contents/', [AdminController::class, 'editContent'])->name('admin.content.edit');
    Route::post('contents/edit', [AdminController::class, 'editContentAction'])->name('admin.contents.edit.action');

    Route::get('pcontents/', [AdminController::class, 'editPcontent'])->name('admin.pcontent.edit');
    Route::post('pcontents/edit', [AdminController::class, 'editPcontentAction'])->name('admin.pcontents.edit.action');

    Route::get('acontents/', [AdminController::class, 'editAcontent'])->name('admin.acontent.edit');
    Route::post('acontents/edit', [AdminController::class, 'editAcontentAction'])->name('admin.acontents.edit.action');
    
    Route::get('ccontents/', [AdminController::class, 'editCcontent'])->name('admin.ccontent.edit');
    Route::post('ccontents/edit', [AdminController::class, 'editCcontentAction'])->name('admin.ccontents.edit.action');


    Route::get('get_csv', [AdminController::class, 'get_csv'])->name('get_csv');
});

require __DIR__.'/auth.php';
