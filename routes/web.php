<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Alumnos\StudentController;
use App\Http\Controllers\Alumnos\AlumnosController;
use App\Http\Controllers\SubjectController;


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

Route::resource('Unidades', SubjectController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/alumnos', [AlumnosController::class, 'store'])->name('Alumnos.store');
    Route::get('/alumnos', [AlumnosController::class, 'index'])->name('Alumnos.index');
    Route::get('/alumnos', [AlumnosController::class, 'show'])->name('Alumnos.show');
    Route::put('/alumnos', [AlumnosController::class, 'update'])->name('Alumnos.update');
    Route::get('/estudiantes', [AlumnosController::class, 'create'])->name('Alumnos.create');
    
});

require __DIR__.'/auth.php';


Route::resource('/Alumnos', AlumnosController::class);
