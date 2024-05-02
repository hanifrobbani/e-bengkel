<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\createUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SparePartController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JenisSparepartController;
use App\Http\Controllers\printController;
use App\Models\User;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
});

// User and login
Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');

Route::get('/dashboard/setting', [UserController::class, 'manageUser'])->middleware('isAdmin');


Route::get('/dashboard/setting/create', [createUserController::class, 'index'])->middleware('auth');
Route::post('/dashboard/setting/create', [createUserController::class, 'User'])->middleware('auth');
Route::get('/dashboard/setting/edit/{id}', function ($id) {
    $users = User::findOrFail($id);
    return view('dashboard.user.editUser', compact('users'));
})->middleware('auth');
Route::put('/dashboard/setting/edit/{id}', [createUserController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/setting/delete/{id}', [createUserController::class, 'delete'])->middleware('auth');

Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware('auth');
Route::get('/dashboard/transaksi', [DashboardController::class, 'showService'])->middleware('auth');
Route::get('/dashboard/product', [DashboardController::class, 'showProduct'])->middleware('auth');
Route::get('/dashboard/customer', [DashboardController::class, 'showCustomers'])->middleware('auth');
Route::get('/dashboard/report', [DashboardController::class, 'showReport'])->middleware('auth');

// Product
Route::resource('/dashboard/product', SparePartController::class)->middleware('auth');

// transaksi
Route::get('/dashboard/transaksi/create', [TransaksiController::class, 'product'])->middleware('auth');
Route::post('/dashboard/transaksi/create', [TransaksiController::class, 'simpanTransaksi'])->middleware('auth');
Route::get('/dashboard/transaksi', [TransaksiController::class, 'index'])->middleware('auth');
Route::get('/dashboard/transaksi/{id}/show', [TransaksiController::class, 'showTransaksi'])->middleware('auth');
Route::get('/dashboard/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->middleware('auth');

//customer
Route::get('/dashboard/customer', [CustomerController::class, 'store'])->middleware('auth');

// jenis product
Route::get('/dashboard/jenis/show', [printController::class, 'print'])->middleware('auth');
Route::get('/dashboard/product/create', [SparePartController::class, 'jenis'])->middleware('auth');

Route::resource('/dashboard/jenis', JenisSparepartController::class)->middleware('auth');



//  Route::get('/dashboard/jenis', [JenisController::class, 'index'])->middleware('auth');
// Route::get('jenis/create', [JenisController::class, 'create'])->middleware('auth');
// Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store');
// Route::delete('jenis/{kd_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
// Route::get('jenis/{kd_jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit'); 
// Route::put('jenis/{kd_jenis}', [JenisController::class, 'update'])->name('jenis.update');
// Route::get('jenis/show', [JenisController::class, 'show'])->middleware('auth');