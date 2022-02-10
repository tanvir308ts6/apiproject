<?php

use App\Http\Controllers\facultyController;
use App\Http\Controllers\noticecontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\ClassSeduilController;

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
// apis for student
Route::get("student/{id?}", [StudentController::class, 'show']);
Route::get("paginate", [StudentController::class, 'paginate']);
Route::post("addstudent", [StudentController::class, 'add']);
Route::patch("editstudent/{id}", [StudentController::class, 'update']);
Route::delete("deleteStudent/{id}", [StudentController::class, 'delete']);
Route::get("searchStudent/{student_id}", [StudentController::class, 'search']);
// apis for faculty
Route::get("faculty", [facultyController::class, 'getFaculty']);
Route::post("department", [facultyController::class, 'getDepartment']);
// api for notice
Route::get("notice", [noticeController::class, 'getnotice']);
Route::post("addnotice", [noticeController::class, 'addNotice']);
//teacher api
Route::get("teacher/{id?}", [teacherController::class, 'getTeacher']);
Route::post("addTeacher", [teacherController::class, 'addTeacher']);
Route::patch("updateTeacher/{id}", [teacherController::class, 'updateTeacher']);
// class rutine api
Route::get("classSchedule/{id?}", [ClassSeduilController::class, 'getclassSedule']);
Route::get("searchClass/{for_batch?}", [ClassSeduilController::class, 'searchClass']);
Route::post("AddClass", [ClassSeduilController::class, 'addClass']);
