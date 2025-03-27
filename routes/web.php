<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Subject;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;


// Student data route
Route::get('/students', function () {
    $students = Student::select('name', 'program')->get();
    return response()->json($students);
});

// Subject data route
Route::get('/subjects', function () {
    $subjects = Subject::select('name', 'year')
        ->orderBy('year')
        ->get()
        ->groupBy('year');
    return response()->json($subjects);
});