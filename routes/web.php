<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\HealthcareController;

//Surgery
Route::get('/surgery/create', [SurgeryController::class, 'create']);
Route::get('/surgery/list', [SurgeryController::class, 'list']);
Route::get('/surgery/management', [SurgeryController::class, 'management']);

//patient
Route::get('/patient/create', [PatientController::class, 'create']);
Route::get('/patient/view', [PatientController::class, 'view']);
Route::get('/patient/edit', [PatientController::class, 'edit']);
Route::get('/patient/management', [PatientController::class, 'management']);

//doctor
Route::get('/doctor/create', [DoctorController::class, 'create']);
Route::get('/doctor/view', [DoctorController::class, 'view']);
Route::get('/doctor/edit', [DoctorController::class, 'edit']);
Route::get('/doctor/management', [DoctorController::class, 'management']);


//healthcare
Route::get('/healthcare/create', [HealthcareController::class, 'create']);
Route::get('/healthcare/view', [HealthcareController::class, 'view']);
Route::get('/healthcare/edit', [HealthcareController::class, 'edit']);
Route::get('/healthcare/management', [HealthcareController::class, 'management']);

//specialty
Route::get('/specialty/create', [SpecialtyController::class, 'create']);
Route::get('/specialty/view', [SpecialtyController::class, 'view']);
Route::get('/specialty/edit', [SpecialtyController::class, 'edit']);
Route::get('/specialty/management', [SpecialtyController::class, 'management']);






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
    return view('/all/signin');
});

Route::get('/signup', function () {
    return view('/all/signup');
});

Route::get('/welcome', function () {
    return view('/all/welcome');
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
