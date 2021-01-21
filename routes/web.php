<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::view('/', "welcome");
//Route::view('auth/dash', "dashboard");
Route::view('/home' ,"welcome");
Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');

Route::get('/auth/update', [MainController::class, 'update'])->middleware('authentication')->name('auth.update');
Route::post('/auth/passupdate', [MainController::class, 'passupdate'])->name('auth.passupdate');

Route::get('/auth/reset', [MainController::class, 'reset'])->name('auth.reset');
Route::get('/auth/sendMail', [MainController::class, 'sendMail'])->name('auth.sendMail');

Route::get('/auth/dashboard', [MainController::class, 'dashboard'])->middleware('authentication')->name('auth.dashboard');
Route::post('/auth/profileview', [MainController::class, 'profileview'])->name('auth.profileview');

Route::get('/auth/logout', [MainController::class, 'logout'])->middleware('authentication')->name('auth.logout');
Route::post('/auth/session_destroy', [MainController::class, 'save'])->name('session_destroy');

Route::get('/expense/manage', [ExpenseController::class, 'manage'])->middleware('authentication')->name('expense.manage');
Route::post('/expense/manager', [MainController::class, 'manager'])->name(('expense.manager'));

Route::get('/expense/addexpense', [ExpenseController::class, 'addexpense'])->middleware('authentication')->name('expense.addexpense');
Route::post('/expense/add_expense', [ExpenseController::class, 'add_expense'])->name('expense.add_expense');

Route::get('/expense/profile', [ExpenseController::class, 'profile'])->middleware('authentication')->name('expense.profile');

Route::get('/expense/daybook', [ExpenseController::class, 'daybook'])->middleware('authentication')->name('expense.daybook');
Route::post('/expense/day_book', [ExpenseController::class, 'day_book'])->name('expense.day_book');

Route::get('/expense/subcategory', [ExpenseController::class, 'subcategory'])->middleware('authentication')->name('expense.subcategory');

Route::get('/expense/delete/{id}', [ExpenseController::class,'delete']);
