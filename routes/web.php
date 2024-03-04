<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\HealthcareController;
use App\Models\Healthcare;

//Surgery
Route::get('/surgeries/create', [SurgeryController::class, 'create'])->name('surgery.create');
Route::get('/mysurgeries', [SurgeryController::class, 'list'])->name('surgery.list');
Route::get('/surgeries', [SurgeryController::class, 'index'])->name('surgeries.index');
Route::delete('/surgeries/{surgery}', [SurgeryController::class, 'destroy'])->name('surgeries.destroy');

//patient

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy');



//doctor
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy');


//healthcare
Route::get('/healthcares', [HealthcareController::class, 'index'])->name('healthcares.index');
Route::get('/healthcares/create', [HealthcareController::class, 'create'])->name('healthcares.create');
Route::post('/healthcares', [HealthcareController::class, 'store'])->name('healthcares.store');
Route::get('/healthcares/{healthcare}', [HealthcareController::class, 'show'])->name('healthcares.show');
Route::get('/healthcares/{healthcare}/edit', [HealthcareController::class, 'edit'])->name('healthcares.edit');
Route::put('/healthcares/{healthcare}', [HealthcareController::class, 'update'])->name('healthcares.update');
Route::delete('/healthcares/{healthcare}', [HealthcareController::class, 'destroy'])->name('healthcares.destroy');


//specialty
Route::get('/specialties', [SpecialtyController::class, 'index'])->name('specialties.index');
Route::get('/specialties/create', [SpecialtyController::class, 'create'])->name('specialties.create');
Route::post('/specialties', [SpecialtyController::class, 'store'])->name('specialties.store');
Route::get('/specialties/{specialty}', [SpecialtyController::class, 'show'])->name('specialties.show');
Route::get('/specialties/{specialty}/edit', [SpecialtyController::class, 'edit'])->name('specialties.edit');
Route::put('/specialties/{specialty}', [SpecialtyController::class, 'update'])->name('specialties.update');
Route::delete('/specialties/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialties.destroy');





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
    return view('/welcome');
});
Route::get('/management', function () {
    return view('/management');
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
