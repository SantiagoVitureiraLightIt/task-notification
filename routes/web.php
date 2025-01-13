<?php

use Illuminate\Support\Facades\Route;
use Lightit\Backoffice\Employees\App\Controllers\StoreEmployeeController;
use Lightit\Backoffice\Employee\Application\Controllers\ListEmployeesController;
use Lightit\Backoffice\Task\Application\Controllers\ListTasksController;
use Lightit\Backoffice\Task\Application\Controllers\GetTaskController;
use Lightit\Backoffice\Task\Application\Controllers\UpsertTaskController;


Route::post('/employees', StoreEmployeeController::class)->name('employees.store');


