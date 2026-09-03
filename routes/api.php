<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::post("/students", [StudentController::class, "store"]);
Route::get("/students", [StudentController::class, "all"]);
Route::get("/student/{id}", [StudentController::class, "byId"]);