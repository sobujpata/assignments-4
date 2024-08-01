<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');