<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('home.index');