<?php

use Illuminate\Support\Facades\Route;
use Lightit\Backoffice\Employees\App\Controllers\StoreEmployeeController;
use Lightit\Shared\App\Exceptions\InvalidActionException;

Route::get('invalid', static fn() => throw new InvalidActionException("Is not valid"));

Route::get('{unknown}', static fn() => view('app  '))->where('unknown', '^(?!api).*$');

Route::post('/employees', StoreEmployeeController::class)->name('employees.store');
