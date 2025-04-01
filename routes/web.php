<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;  // This is the controller of the registration and dashboard
use App\Http\Controllers\EventController; // It is the controller of the Events
use App\Http\Controllers\HomeController; // This is the controller are the home page
Route::get('/', function () {
    return view('index');
});

// This is the routing of the home page related routings
Route::get('/Working-on-Page',[HomeController::class, 'working']);


// Here i am writing the code the the routing of the students registration
Route::get('/Register',[AuthController::class, 'register']);
Route::get('/Profile',[AuthController::class, 'profile']);

// Here i am writing the code of the Events
Route::get('/Pragyan-2025',[EventController::class, 'pragyanHome']);
Route::get('/Cultural-Events',[EventController::class, 'cultural']);
Route::get('/Cultural-Events-Participants-List',[EventController::class, 'culturalData']);
Route::get('/Sports-Events',[EventController::class, 'sports']);
Route::get('/Academic-Events',[EventController::class, 'academic']);
Route::get('/External-Events-Participation',[EventController::class, 'extFinal_data']);
Route::get('/External-Participants',[EventController::class, 'External']);
Route::post('/Login-Admin-panels-of-Pragyan',[EventController::class, 'admin'])->name('event_Admin');
Route::any('/Login-Acountant-panels-of-Pragyan',[EventController::class, 'acountant_log'])->name('event_Accontant');
Route::get('/Login-Accountant',[EventController::class, 'accountant']);
Route::get('/Log-in-Admin', [EventController::class, 'adminlog'])->name('login_data');
Route::get('/Congrates',[EventController::class, 'thanks']);
Route::post('/CulturalEvent', [EventController::class, 'CulturalEvent'])->name('CulturalEvent');
Route::post('/SportEvents', [EventController::class, 'SportEvents'])->name('sportEvents');
Route::post('/AcademicEvents', [EventController::class, 'AcademicEvents'])->name('academicEvents');
Route::post('/External_data', [EventController::class, 'Ext_data'])->name('Ext_data');
Route::post('/final-External_data', [EventController::class, 'Final_Ext_data'])->name('Final_Ext_data');



// Here i will write the all code for searching
Route::get('cltr_Data', [EventController::class, 'cltr_Data'])->name('cltr_Data');