<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewBooksController;
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
Route::get('/', function () {
    return view('main');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/book',[BooksController::class,'index']);
Route::post('/searchBook', [BooksController::class, 'search']);
Route::get('/',[BooksController::class,'top5']);
Route::get('/customer',[BooksController::class,'indexCustomer']);

Route::get('/bookDetail/{id}',[BooksController::class,'detailBook']);
Route::get('/publisher',[PublishersController::class, 'index']);

Route::get('/publisherDetail/{id}',[PublishersController::class,'detailPublisher']);

Route::get('/categories/{id}',[CategoriesController::class, 'display']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
})->name('login-page');

Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login-check',[LoginController::class,'check'])->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'registerLogic'])->name('register-logic');

Route::get('/auth/google',[googleController::class,'googleRedirect'])->name('google-login');
Route::get('/auth/google/callback',[googleController::class,'googleCallback'])->name('google-callback');

Route::get('/cart/{id}',[CartsController::class, 'idx'])->name('cart_get');
Route::POST('/cart/{user_id}/{product_id}',[CartsController::class, 'store']);
Route::delete('/cart/delete/{user_id}/{product_id}',[CartsController::class, 'deleteLogic']);

Route::get('/profile/{id}', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'updateProfile'])->middleware('auth');

Route::get('/changePassword/{id}', [ProfileController::class, 'changepass'])->middleware('auth');
Route::put('/changePassword', [ProfileController::class, 'updatePassword'])->middleware('auth');

Route::get('/view', [ViewBooksController::class,'index'])->middleware('admin');
Route::post('/view', [BooksController::class ,'update'])->middleware('admin');

Route::get('/addBooks',[BooksController::class,'insertForm'])->middleware('admin');
Route::post('/addBooks',[BooksController::class,'insertBook'])->middleware('admin');

Route::get('/updateitem/{id}', [BooksController::class ,'viewupdate'])->middleware('admin');
Route::put('/updateitem/logic/{id}', [BooksController::class ,'update'])->middleware('admin');

Route::get('/delete/{id}', [BooksController::class,'delete'])->middleware('admin');

Route::get('/transactionHistory/{id}',[historyController::class, 'index'])->name('history_get');
Route::POST('/history/{userId}',[historyController::class, 'insertHistory']);
