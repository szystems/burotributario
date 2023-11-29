<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//admin
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\CourseInstructorController;
use App\Http\Controllers\Admin\CategoryCourseController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AudioController;

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
Route::get('about', [FrontendController::class, 'about']);
Route::get('courses', [FrontendController::class, 'courses']);
Route::get('teachers', [FrontendController::class, 'teachers']);
Route::get('subscribe', [FrontendController::class, 'subscribe']);
Route::get('contact', [FrontendController::class, 'contact']);

Route::get('categories', [FrontendController::class, 'showcategories']);
Route::get('category/{slug}', [FrontendController::class, 'showcategorycourses']);
Route::get('show-course/{category_slug}/{course_slug}', [FrontendController::class, 'showcourse']);
Route::get('show-course/{course_slug}/video/{video_id}', [FrontendController::class, 'showvideo']);
Route::get('show-course/{course_slug}/audio/{audio_id}', [FrontendController::class, 'showaudio']);



Auth::routes();

 Route::get('/home', [FrontendController::class, 'index'])->name('home');

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

    //Admin Instructors
    Route::get('instructors',[InstructorController::class, 'index']);
    Route::get('show-instructor/{id}',[InstructorController::class, 'show']);
    Route::get('add-instructor', [InstructorController::class, 'add']);
    Route::post('insert-instructor', [InstructorController::class, 'insert']);
    Route::get('edit-instructor/{id}',[InstructorController::class,'edit']);
    Route::put('update-instructor/{id}', [InstructorController::class, 'update']);
    Route::get('delete-instructor/{id}', [InstructorController::class, 'destroy']);

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

    //Admin Course Instructors
    Route::post('insert-course-instructor',[CourseInstructorController::class, 'insert']);
    Route::get('delete-course-instructor/{id}', [CourseInstructorController::class, 'destroy']);

    //Admin Video
    Route::get('add-video/{id}', [VideoController::class, 'add']);
    Route::post('insert-video', [VideoController::class, 'insert']);
    Route::get('edit-video/{id}',[VideoController::class,'edit']);
    Route::put('update-video/{id}', [VideoController::class, 'update']);
    Route::get('delete-video/{id}', [VideoController::class, 'destroy']);

    //Admin Audio
    Route::get('add-audio/{id}', [AudioController::class, 'add']);
    Route::post('insert-audio', [AudioController::class, 'insert']);
    Route::get('edit-audio/{id}',[AudioController::class,'edit']);
    Route::put('update-audio/{id}', [AudioController::class, 'update']);
    Route::get('delete-audio/{id}', [AudioController::class, 'destroy']);

    //config
    Route::get('config', [ConfigController::class, 'index']);
    Route::put('update-config', [ConfigController::class, 'update']);

 });



