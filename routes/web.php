<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineRecordController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Welcome / Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    
    // Patients
    Route::resource('patients', PatientController::class);
    
    // Vaccines & Inventory
    Route::resource('vaccines', VaccineController::class);
    Route::get('/vaccines-inventory', [VaccineController::class, 'inventory'])->name('vaccines.inventory');

    // Vaccination Records (Standard Resource)
    Route::resource('vaccination-records', VaccineRecordController::class);
    
    // Custom Route Aliases (Blade view buttons ke liye)
    Route::get('/vaccination-records', [VaccineRecordController::class, 'index'])->name('records.index');
    Route::get('/vaccination-records/create', [VaccineRecordController::class, 'create'])->name('records.create');
    Route::get('/vaccination-records/{id}/edit', [VaccineRecordController::class, 'edit'])->name('records.edit');
    Route::delete('/vaccination-records/{id}', [VaccineRecordController::class, 'destroy'])->name('records.destroy');

    // Reports
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});

// Laravel Breeze Default Auth Routes (Login, Register, Logout)
require __DIR__.'/auth.php';