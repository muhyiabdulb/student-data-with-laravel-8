<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::prefix('phj')->group(function() {
    Route::get('/class-index', [ClassesController::class, 'index'])->name('class.index');
	Route::get('/class-add', [ClassesController::class, 'create'])->name('class.add');
	Route::post('/class-store', [ClassesController::class, 'store'])->name('class.store');
	Route::get('/{id}/class-edit', [ClassesController::class, 'edit'])->name('class.edit');
	Route::put('/{id}/class-edit', [ClassesController::class, 'update'])->name('class.update');
	Route::delete('/{id}/class-delete', [ClassesController::class, 'destroy'])->name('class.destroy');
});

Route::prefix('phj')->group(function() {
    Route::get('/student-index', [StudentController::class, 'index'])->name('student.index');
	Route::get('/student-add', [StudentController::class, 'create'])->name('student.add');
	Route::post('/student-store', [StudentController::class, 'store'])->name('student.store');
	Route::get('/{id}/student-show', [StudentController::class, 'show'])->name('student.show');
	Route::get('/{id}/student-edit', [StudentController::class, 'edit'])->name('student.edit');
	Route::put('/{id}/student-edit', [StudentController::class, 'update'])->name('student.update');
	Route::delete('/{id}/student-delete', [StudentController::class, 'destroy'])->name('student.destroy');
	Route::get('/search', [SearchController::class, 'student'])->name('search.student');
});
