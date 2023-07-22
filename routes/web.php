<?php

use App\Http\Controllers\addStudyPlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('message', [UserController::class, 'getPage'])->name('message');
Route::post('message', [UserController::class, 'getPage']);

//Route::get('Create', [UserController::class, 'create'])->name('Create');
//Route::post('Create', [UserController::class, 'create']);

Route::get('getAll', [UserController::class, 'getAll'])->name('getAll');
Route::post('getAll', [UserController::class, 'getAll']);




Route::get('AddStudy', [addStudyPlaceController::class, 'Add_Study'])->name('AddStudy');
Route::post('AddStudy', [addStudyPlaceController::class, 'Add_Study']);

Route::get('registerStudy', [addStudyPlaceController::class, 'registerStudy'])->name('registerStudy');
Route::post('registerStudy', [addStudyPlaceController::class, 'registerStudy']);
require __DIR__.'/auth.php';
