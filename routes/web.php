<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseIntructorController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentAssessmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::resource('courses', CourseController::class);
    Route::resource('students', StudentController::class);
    Route::resource('instructors', InstructorController::class);
    Route::resource('student-assessments', StudentAssessmentController::class);
    Route::resource('course-instructors', CourseIntructorController::class);
    Route::resource('assessments', AssessmentController::class);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
