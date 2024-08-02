<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');
Route::POST('/contacts', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contacts/{id}/delete', [ContactController::class, 'destroy'])->name('contact.delete');