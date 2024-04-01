<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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

//// Auth
//Route::get('/', function () {
//    return view('auth.login');
//})->name('portal.login');
//
//
//Route::get('/admin/dashboard', function () {
//    return view('admin.dashboard');
//})->name('admin.dashboard');
//
//Route::get('/admin/users', function () {
//    return view('admin.users.list');
//})->name('admin.user-list');
//
//Route::get('/admin/add-user', function () {
//    return view('admin.users.add-user');
//})->name('admin.add-user');
//
//Route::get('/admin/edit-user', function () {
//    return view('admin.users.edit-user');
//})->name('admin.edit-user');
//
//Route::get('/admin/assign-report', function () {
//    return view('admin.users.assign-report');
//})->name('admin.assign-report');
//
//Route::get('/admin/add-demographic', function () {
//    return view('admin.add-demographic');
//})->name('admin.add-demographic');
//
//Route::get('/admin/roles', function () {
//    return view('admin.roles.list');
//})->name('admin.role-list');
//
//Route::get('/admin/add-roles', function () {
//    return view('admin.roles.add');
//})->name('admin.role-add');
//
//Route::get('/admin/add-graph', function () {
//    return view('admin.admission.data-graph');
//})->name('admin.search.data');
//
//Route::get('/admin/add-bulk-data', function () {
//    return view('admin.admission.add-data');
//})->name('admin.admission.add-bulk-data');
//
//Route::get('/admin/profile', function () {
//    return view('admin.profile.index');
//})->name('admin.profile');
//
//Route::get('/admin/all-admin', function () {
//    return view('admin.sub-admin.list');
//})->name('admin.list-admin');
//
//Route::get('/admin/add-admin', function () {
//    return view('admin.sub-admin.add-admin');
//})->name('admin.add-admin');
//
//Route::get('/admin/student-graph', [\App\Http\Controllers\GraphsController::class, 'index'])->name('admin.student-graph');


//Route::get('/{vue_capture?}',function () {
//    return view('index');
//})->where('vue_capture', '[\/\w\.-]*');


Route::get('/{any}', function (Request $request) {
    return view('index');
})->name('login');

Route::get('/{vue_capture?}',function (Request $request) {
    $studentUser = false;
    return view('index', compact('studentUser'));
})->where('vue_capture', '[\/\w\.-]*');



