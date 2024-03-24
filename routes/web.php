<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conferencescontroller;
use App\Http\Controllers\Divisionscontroller;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\TeamsController;

Route::view('/', 'conferences.index');
Route::resource('/Conferences',Conferencescontroller::class);

Route::view('/', 'divisions.index');
Route::resource('/Divisions',DivisionsController::class);

Route::view('/', 'cities.index');
Route::resource('/Cities',CitiesController::class);

Route::view('/', 'teams.index');
Route::resource('/Teams',TeamsController::class);
