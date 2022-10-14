<?php

use App\Http\Controllers\Api\ChapterController;
use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('course', CourseController::class);
Route::get('instructor/{course}', [CourseController::class,'instructor']);

Route::get('chapters/{course}', [ChapterController::class, 'index']);
Route::get('next-chapter/{chapter}/course/{course}', [ChapterController::class, 'nextChapter']);
Route::get('previous-chapter/{chapter}/course/{id}', [ChapterController::class, 'previousChapter']);
Route::get('notes/{chapter}', [ChapterController::class, 'notes']);
Route::get('comments/{chapter}', [ChapterController::class, 'comments']);
Route::get('chapters/course/{course}/student/{student}', [ChapterController::class, 'userChapter']);
