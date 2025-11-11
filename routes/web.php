<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientAuthController;
use App\Http\Controllers\PatientController;

Route::prefix('patient')->group(function () {
    Route::get('register', [PatientAuthController::class, 'showRegisterForm'])->name('patient.register');
    Route::post('register', [PatientAuthController::class, 'register']);
    Route::get('login', [PatientAuthController::class, 'showLoginForm'])->name('patient.login');
    Route::post('login', [PatientAuthController::class, 'login']);
    Route::post('logout', [PatientAuthController::class, 'logout'])->name('patient.logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [PatientController::class, 'dashboard'])->name('patient.dashboard');
        Route::get('doctors', [PatientController::class, 'doctors'])->name('patient.doctors');
        Route::get('doctors/{doctor}', [PatientController::class, 'showDoctor'])->name('patient.doctor.show');
        Route::post('appointments/{doctor}', [PatientController::class, 'bookAppointment'])->name('patient.book');
        Route::get('appointments', [PatientController::class, 'myAppointments'])->name('patient.appointments');
    });
});


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

require __DIR__.'/auth.php';
