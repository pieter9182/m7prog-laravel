<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\projectController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/projects/add', [ ProjectController::class, 'add' ])->name('project.add');
});

require __DIR__.'/auth.php';
Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'index'])->name('about');
//Route::get('/project', [ \App\Http\Controllers\ProjectController::class, 'index'])->name('project');
Route::get('/projects', [ ProjectController::class, 'index' ])->name('project.index');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');

