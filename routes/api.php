<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('students',StudentController::class);
Route::apiResource('teachers',TeacherController::class);
Route::apiResource('projects',ProjectController::class);
Route::apiResource('subjects',SubjectController::class);
Route::apiResource('schools',SchoolController::class);
Route::apiResource('assessments',AssessmentController::class);
Route::apiResource('exams',ExamController::class);
Route::apiResource('tests',TestController::class);