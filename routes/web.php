<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\adminMiddleware;
use App\Http\Middleware\studentMiddleware;
use App\Http\Middleware\teacherMiddleware;
use App\Models\User;


    Route::get('/userCheck', [userController::class, 'loginCheck'])->name('login.check');
    Route::get('/', [userController::class, 'showLoginForm'])->name('login.form');
    Route::POST('/login', [userController::class, 'Userlogin'])->name('user.login');
    Route::post('/logout/user', [userController::class, 'logout'])->name('logout.user');




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboardShow'])->name('dashboard.show');
});

Route::get('/student-dashboard', [userController::class, 'studentDashboard'])->name('student.dashboard')->middleware(['auth', studentMiddleware::class]);
Route::get('/teacher-dashboard', [userController::class, 'teacherdashboard'])->name('teacher.dashboard')->middleware(['auth', teacherMiddleware::class]);


Route::middleware(['auth', adminMiddleware::class])->group(function () {
    Route::get('/admin-dashboard', [userController::class, 'admindashboard'])->name('admin.dashboard');
    Route::GET('/user/{id}', [userController::class, 'getUserData'])->name('user.show');
    Route::post('/student-data', [userController::class, 'StudentDataStore'])->name('student-data.store');
    Route::GET('/student-data-show', [userController::class, 'StudentDataShow'])->name('student.data.show');
    Route::GET('/student-data-edit/{id}', [userController::class, 'StudentDataEdit'])->name('student-data.edit');
    Route::delete('/student-data-destroy/{id}', [userController::class, 'StudentDataDestroy'])->name('student-data.destroy');
});





Route::resource('subject', SubjectController::class)->middleware(['auth'])->names([
    'index' => 'subject.index',
    'create' => 'subject.create',
    'store' => 'subject.store',
    'show' => 'subject.show',
    'edit' => 'subject.edit',
    'destroy' => 'subject.destroy', 
]);

Route::post('/subject/update/{id}', [SubjectController::class, 'update'])->name('subject.custom.update');
Route::post('course/update/{id}', [CourseController::class,'update'])->name('course.custom.update');


Route::resource('course', CourseController::class)->middleware(['auth'])->names([
    'index' => 'course.index',
    'create' => 'course.create',
    'store' => 'course.store',
    'show' => 'course.show',
    'edit' => 'course.edit',
    'destroy' => 'course.destroy',
]);










