<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Main_App;
use App\Http\Controllers\C_Branch;
use App\Http\Controllers\C_Employee;
use App\Http\Controllers\C_Service_Item;
use App\Http\Controllers\C_Raw_Material;
use App\Http\Controllers\C_Customer;
use App\Http\Controllers\C_Laundry_Card;

Route::get('/', [C_Home::class, 'homePage']);
// auth 
Route::get('/login', [C_Auth::class, 'loginPage']);
Route::post('/auth/login/process', [C_Auth::class, 'loginProcess']);
Route::get('/logout', [C_Auth::class, 'logout']);
// main app 
Route::get('/app', [C_Main_App::class, 'mainApp']);
Route::get('/app/dashboard', [C_Main_App::class, 'dashboardPage']);
// branch 
Route::get('/app/branch', [C_Branch::class, 'branchPage']);
Route::post('/app/branch/add/process', [C_Branch::class, 'processAddBranch']);
// employee 
Route::get('/app/employee', [C_Employee::class, 'employeePage']);
Route::post('/app/employee/add/process', [C_Employee::class, 'processAddEmployee']);
Route::post('/app/employee/delete/process', [C_Employee::class, 'processDeleteEmployee']);
// service item 
Route::get('/app/service-item', [C_Service_Item::class, 'serviceItemPage']);
Route::post('/app/service-item/add/process', [C_Service_Item::class, 'processAddServiceItem']);
Route::post('/app/service-item/delete/process', [C_Service_Item::class, 'processDeleteServiceItem']);
// raw material 
Route::get('/app/raw-material', [C_Raw_Material::class, 'rawMaterialPage']);
Route::get('/app/raw-material/{idRaw}/edit', [C_Raw_Material::class, 'editRawMaterialPage']);
Route::post('/app/raw-material/add/process', [C_Raw_Material::class, 'processAddRawMaterial']);
Route::post('/app/raw-material/delete/process', [C_Raw_Material::class, 'processDeleteRawMaterial']);
Route::post('/app/raw-material/edit/process', [C_Raw_Material::class, 'processsUpdateRawMaterial']);
// customer 
Route::get('/app/customer', [C_Customer::class, 'customerPage']);
Route::post('/app/customer/add/process', [C_Customer::class, 'processAddCustomer']);
Route::post('/app/customer/delete/process', [C_Customer::class, 'processDeleteCustomer']);
// laundry card 
Route::get('/app/laundry-card', [C_Laundry_Card::class, 'laundryCard']);
Route::get('/app/laundry-card/new', [C_Laundry_Card::class, 'newLaundryCard']);
Route::post('/app/laundry-card/add/process', [C_Laundry_Card::class, 'processAddNewLaundry']);