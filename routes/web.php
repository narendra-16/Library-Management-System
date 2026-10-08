<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/', [BookController::class ,'index'])->name('products.index');
Route::get('/product/create', [BookController::class , 'create'])->name('products.create');
Route::post('/product/store', [BookController::class , 'store'])->name('products.store');
Route::get('/product/{id}/edit', [BookController::class ,'edit']);
Route::put('/product/{id}/update', [BookController::class ,'update']);
Route::get('/product/{id}/delete', [BookController::class ,'destroy']);
Route::get('/login' ,[AuthController::class ,'showloginform']);
Route::post('/login' ,[AuthController::class ,'showloginform']);
Route::get('/register' ,[AuthController::class ,'showregister'])->name('register');
Route::post('/register' ,[AuthController::class ,'register'])->name('register');
Route::post('/login' , [AuthController::class , 'login'])->name('login');
Route::get ('/dashboard', function () {
return view('auth.dashboard');
})->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');