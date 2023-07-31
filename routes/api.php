<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function(){
    //user
    Route::get('/user' ,[UserController::class, 'getListUser']);
    Route::post('/user' ,[UserController::class, 'insertUser']);
    Route::delete('/user/delete/{id}' ,[UserController::class, 'deleteUser']);
     Route::patch('/user/update/{id}' ,[UserController::class, 'updateUser']);
      //semester
      Route::get('/semester',[SemesterController::class, 'getListSemester']);
      Route::post('/semester',[SemesterController::class, 'insertSemester']);
      Route::patch('/semester/{id}',[SemesterController::class, 'updateSemester']);
      Route::delete('/semester/{id}',[SemesterController::class, 'deleteSemester']);
     //course
        Route::get('/course',[CourseController::class, 'getListCourse']);
      Route::post('/course',[CourseController::class, 'insertCourse']);
      Route::patch('/course/{id}',[CourseController::class, 'updateCourse']);
      Route::delete('/course/{id}',[CourseController::class, 'deleteCourse']);
     //department
        Route::get('/department',[DepartmentController::class, 'getListDepartment']);
      Route::post('/department',[DepartmentController::class, 'insertDepartment']);
      Route::patch('/department/{id}',[DepartmentController::class, 'updateDepartment']);
      Route::delete('/department/{id}',[DepartmentController::class, 'deleteDepartment']);
     //classroom
     Route::get('/classroom',[ClassroomController::class, 'getListClassroom']);
      Route::post('/classroom',[ClassroomController::class, 'insertClassroom']);
      Route::patch('/classroom/{id}',[ClassroomController::class, 'updateClassroom']);
      Route::delete('/classroom/{id}',[ClassroomController::class, 'deleteClassroom']);
     //teacher
     Route::get('/teacher',[TeacherController::class, 'getListTeacher']);
      Route::post('/teacher',[TeacherController::class, 'insertTeacher']);
      Route::patch('/teacher/{id}',[TeacherController::class, 'updateTeacher']);
      Route::delete('/teacher/{id}',[TeacherController::class, 'deleteTeacher']);
     //student
     Route::get('/student',[StudentController::class, 'getListStudent']);
      Route::post('/student',[StudentController::class, 'insertStudent']);
      Route::patch('/student/{id}',[StudentController::class, 'updateStudent']);
      Route::delete('/student/{id}',[StudentController::class, 'deleteStudent']);
});
    
   

