<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Resources\User;

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

Route::get('data',[AdminController::class,'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('student',[StudentController::class,'index'])->name('index');
Route::post('student',[StudentController::class,'store'])->name('store');
Route::get('view',[StudentController::class,'show'])->name('show');
Route::get('edit/{id}',[StudentController::class,'edit'])->name('editdata');
Route::put('update/{id}',[StudentController::class,'update'])->name('updatedata');
Route::get('delete/{id}',[StudentController::class,'destroy'])->name('destroy');


