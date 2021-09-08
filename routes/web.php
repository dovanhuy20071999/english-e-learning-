<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/course-list', [HomeController::class, 'showCourse'])->name('course-list');

Route::get('change-language/{language}', [LanguageController::class, 'index'])->name('change-language');

Route::get('/login', [LoginController::class, 'getLogin'])->name('get.login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('post.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'getRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'postRegister'])->name('post.register');

//Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);


//Quizz
Route::get('quizes_list', [QuizController::class, 'index'])->name('quiz_list');

Route::get('/exam-start/{id}', [ExamController::class, 'exam'])->name('exam.start');

Route::post('/exams', [ExamController::class, 'examPost'])->name('exams');

Route::get('/MyExamResult', [ExamController::class, 'examResult'])->name('exam.result');

Route::get('/MyExamDetails/{id}', [ExamController::class, 'ResultDetails'])->name('exam.resultDetail');

//Home



Route::group(['middleware' => 'auth'], function () {
    Route::get('/lesson-list/{id}', [HomeController::class, 'showLesson'])->name('lesson.list');
    Route::get('/lesson-detail/{id}', [LessonController::class, 'showLessonDetail'])->name('lesson.detail');
    Route::get('/word-list', [HomeController::class , 'showWordList'])->name('word.list');
    Route::get('/word-list/filter-by-alphabetical', [HomeController::class, 'sortWordAlphabet'])->name('sortWordAlphabet');
    Route::get('/word-list/filter-by-topic', [HomeController::class, 'showTopicToFilter'])->name('showTopicToFilter');
    Route::get('/word-list/filter-by-topic/{id}', [HomeController::class, 'sortWordByTopic'])->name('showWordByTopic');
    Route::get('/my-profile/{id}', [HomeController::class, 'myProfile'])->name('myProfile');
});

Route::post('/save-word/{id}', [WordController::class, 'wordLearned'])->name('word.learned');
Route::get('/my-word/{id}', [HomeController::class, 'myWord'])->name('myWord');