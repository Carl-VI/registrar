<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentRequestController;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;

Route::get('/document-request', [DocumentRequestController::class, 'form'])->name('document.request.form');
Route::post('/document-request', [DocumentRequestController::class, 'submit'])->name('document.request.submit');

Route::post('/document-request', function (Request $request) {
    $request->validate([
        'student_number'    => ['required', 'regex:/^\d{4}-\d{5}$/'],
        'name'              => 'required|string',
        'course'            => 'required|string',
        'year_level'        => 'required|string',
        'document_request'  => 'required|string',
    ]);

    // Dummy logic — Replace this with your model-based logic
    // Example: save to DocumentRequest model
    // DocumentRequest::create([...]);

    // For now, just redirect back with success message
    return back()->with('success', 'Document request submitted successfully!');
})->middleware('auth')->name('document.request.submit');

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Document Request Page
Route::get('/document-request', function () {
    return view('document-request');
})->middleware(['auth'])->name('document.request');

// Approval Page
Route::get('/approval', function () {
    return view('approval');
})->middleware(['auth'])->name('approval');

// Settings Page
Route::get('/settings', function () {
    return view('settings');
})->middleware(['auth'])->name('settings');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
