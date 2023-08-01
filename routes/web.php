<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Frontend\FormDataController;








Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('desktop-support', [HomeController::class, 'desktopSupport'])->name('desktop-support');
Route::get('website-designing', [HomeController::class, 'websiteDesigning'])->name('website-designing');
Route::get('it-consulting', [HomeController::class, 'itConsulting'])->name('it-consulting');
Route::get('network-setup', [HomeController::class, 'networkSetup'])->name('network-setup');
Route::get('softwares-solutions', [HomeController::class, 'softwaresSolutions'])->name('softwares-solutions');
Route::get('data-recovery', [HomeController::class, 'dataRecovery'])->name('data-recovery');
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::post('/submit-form-data', [FormDataController::class, 'store'])->name('form_data.submit');
Route::get('/submit-form-data', [FormDataController::class, 'index'])->name('form_data.index');


// Add similar routes for the rest of the services