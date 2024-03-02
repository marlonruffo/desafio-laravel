<?php

use App\Http\Controllers\ProfileController;
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
    return view('/all/signin');
});

Route::get('/signup', function () {
    return view('/all/signup');
});

Route::get('/welcome', function () {
    return view('/all/welcome');
});

//////gerenciamento
Route::get('/managementDashboard', function () {
    return view('/all/managementDashboard');
});

Route::get('/surgeryManagement', function () {
    return view('/surgery/surgeryManagement');
});

Route::get('/patientManagement', function () {
    return view('/patient/patientManagement');
});

Route::get('/doctorsManagement', function () {
    return view('/doctor/doctorsManagement');
});

Route::get('/specialtyManagement', function () {
    return view('/specialty/specialtyManagement');
});
Route::get('scheduleSurgery', function () {
    return view('/surgery/scheduleSurgery');
});


//////view
Route::get('/viewSurgery', function () {
    return view('/surgery/viewSurgery');
});
Route::get('/viewPatient', function () {
    return view('/patient/viewPatient');
});
Route::get('/viewDoctor', function () {
    return view('/doctor/viewDoctor');
});
Route::get('/viewSpecialty', function () {
    return view('/specialty/viewSpecialty');
});
Route::get('surgeryList', function () {
    return view('/surgery/surgeryList');
});
Route::get('viewHealthcare', function () {
    return view('/healthcare/viewHealthcare');
});


//edit
Route::get('/editSurgery', function () {
    return view('/surgery/editSurgery');
});
Route::get('/editPatient', function () {
    return view('/patient/editPatient');
});
Route::get('/editDoctor', function () {
    return view('/doctor/editDoctor');
});
Route::get('/editSpecialty', function () {
    return view('/specialty/editSpecialty');
});
Route::get('/editHealthcare', function () {
    return view('/healthcare/editHealthcare');
});


//create
Route::get('/createSurgery', function () {
    return view('/surgery/createSurgery');
});

Route::get('/createPatient', function () {
    return view('/patient/createPatient');
});

Route::get('/createDoctor', function () {
    return view('/doctor/createDoctor');
});

Route::get('/createSpecialty', function () {
    return view('/specialty/createSpecialty');
});

Route::get('/createHealthcare/{id}', function () {
    return view('/healthcare/createHealthcare');
});
///////





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
