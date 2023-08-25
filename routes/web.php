<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\AdminController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [Contacts::class, 'index'])->name('contacts.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin.login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin.logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/contacts/{contact_id}/edit', [Contacts::class, 'edit'])->name('contacts.edit');
Route::get('/contacts/{contact_id}/delete', [Contacts::class, 'delete'])->name('contacts.delete');
Route::post('/contacts/{contact_id}', [Contacts::class, 'store'])->name('contacts.store');

Route::get('/contacts/search', [Contacts::class, 'search'])->name('contacts.search');

Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/registration/create', [AuthController::class, 'create'])->name('registration.create');
