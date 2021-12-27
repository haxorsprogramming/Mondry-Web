<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Main_App;
use App\Http\Controllers\C_Branch;
use App\Http\Controllers\C_Employee;


Route::get('/', [C_Home::class, 'homePage']);
// auth 
Route::get('/login', [C_Auth::class, 'loginPage']);
Route::post('/auth/login/process', [C_Auth::class, 'loginProcess']);
// main app 
Route::get('/app', [C_Main_App::class, 'mainApp']);
Route::get('/app/dashboard', [C_Main_App::class, 'dashboardPage']);
// branch 
Route::get('/app/branch', [C_Branch::class, 'branchPage']);
// employee 
Route::get('/app/employee', [C_Employee::class, 'employeePage']);
Route::post('/app/employee/add/process', [C_Employee::class, 'processAddEmployee']);