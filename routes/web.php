<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;
use App\Http\controllers\StudentsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('hola');
// });
 Route::get('/alumnos',[StudentsController::class,'index'])->name('alumnos.index');
Route::resource('student', StudentController::class);;
Route::get('estudiantes',[StudentsController::class,'create'])->name('estudiantes.create');
Route::post('/alumnos',[StudentsController::class,'store']);
