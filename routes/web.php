<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//admin
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\CategoryCourseController;
use App\Http\Controllers\Admin\CourseController;

//user
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Shop Views
Route::get('/', [FrontendController::class, 'index']);

//vistas
Route::get('contact', [FrontendController::class, 'contact']);
Route::post('send-contact', [FrontendController::class, 'sendcontact']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User Dashbord
Route::middleware(['auth'])->group(function () {

    //User Dashboard
    Route::get('my-account', [UserController::class, 'indexuser']);
    Route::get('user-details/{id}', [UserController::class, 'showuser']);
    Route::get('user-edit/{id}', [UserController::class, 'edituser']);
    Route::put('user-update/{id}', [UserController::class, 'updateuser']);

});

//Admin Dashboard
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',[BackendController::class, 'index']);

    //Admin Users
    Route::get('users', [DashboardController::class, 'users']);
    Route::get('show-user/{id}', [DashboardController::class, 'showuser']);
    Route::get('add-user', [DashboardController::class, 'adduser']);
    Route::post('insert-user', [DashboardController::class, 'insertuser']);
    Route::get('edit-user/{id}',[DashboardController::class,'edituser']);
    Route::put('update-user/{id}', [DashboardController::class, 'updateuser']);
    Route::get('delete-user/{id}', [DashboardController::class, 'destroyuser']);
    Route::get('pdf-user', [DashboardController::class, 'pdf']);

    //Admin Course Category
    Route::get('course-categories',[CategoryCourseController::class, 'index']);
    Route::get('show-course-category/{id}',[CategoryCourseController::class, 'show']);
    Route::get('add-course-category', [CategoryCourseController::class, 'add']);
    Route::post('insert-course-category', [CategoryCourseController::class, 'insert']);
    Route::get('edit-course-category/{id}',[CategoryCourseController::class,'edit']);
    Route::put('update-course-category/{id}', [CategoryCourseController::class, 'update']);
    Route::get('delete-course-category/{id}', [CategoryCourseController::class, 'destroy']);

    //Admin Course
    Route::get('index-courses',[CourseController::class, 'index']);
    Route::get('show-course/{id}',[CourseController::class, 'show']);
    Route::get('add-course', [CourseController::class, 'add']);
    Route::post('insert-course',[CourseController::class, 'insert']);
    Route::get('edit-course/{id}',[CourseController::class,'edit']);
    Route::put('update-course/{id}', [CourseController::class, 'update']);
    Route::get('delete-course/{id}', [CourseController::class, 'destroy']);

    //Admin Video
    Route::post('insert-video', [CourseController::class, 'insertvideo']);
    Route::get('edit-video/{id}',[CourseController::class,'editvideo']);
    Route::put('update-video/{id}', [CourseController::class, 'updatevideo']);
    Route::get('delete-video/{id}', [CourseController::class, 'destroyvideo']);

    //Admin Audio
    Route::post('insert-audio', [CourseController::class, 'insertaudio']);
    Route::get('edit-audio/{id}',[CourseController::class,'editaudio']);
    Route::put('update-audio/{id}', [CourseController::class, 'updateaudio']);
    Route::get('delete-audio/{id}', [CourseController::class, 'destroyaudio']);

    //config
    Route::get('config', [ConfigController::class, 'index']);
    Route::put('update-config', [ConfigController::class, 'update']);

 });



