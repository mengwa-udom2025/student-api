<?php
Route::get('/students', [StudentController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);