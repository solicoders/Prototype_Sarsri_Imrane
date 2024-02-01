<?php

use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test_method_index', [App\Repositories\GroupRepository::class, 'getData']);

Route::get('test_method_create', [App\Repositories\GroupRepository::class, 'create']);
// http://127.0.0.1:8000/test_method_create?Group_number=testGroup_number&Reference=testReference&school_years_id=testschool_years_id