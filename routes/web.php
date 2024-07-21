<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beveragesController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\userController;
use App\Http\Controllers\FrontPage;
use App\Http\Controllers\messagesController;


// Route::get('/', function () {
//     return view('welcome');
// // });

Route::get('/', [FrontPage::class, 'index'])->name('index');


Auth::routes(['verify'=>true]);

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

// Users Controller
Route::get('/admin/users', [userController::class, 'index'])->name('users');
Route::get('/admin/addUser', [userController::class, 'create'])->name('addUser');
Route::get('/admin/editUser/{id}', [userController::class, 'edit'])->name('editUser');
Route::put('/updateUser/{id}', [userController::class, 'update'])->name('updateUser');
Route::delete('/deleteUser', [userController::class, 'destroy'])->name('deleteUser');
Route::post('UserInserted', [userController::class, 'store'])->name('UserInserted');
//Route::get('/admin/showCategory/{id}', [userController::class, 'show'])->name('showUser);


///////////////////////////////////////////////////

// Beverages Controller
Route::get('/admin/beverages', [beveragesController::class, 'index'])->name('beverages');
Route::get('/admin/addBeverage', [beveragesController::class, 'create'])->name('addBeverage');
Route::get('/admin/editBeverage/{id}', [beveragesController::class, 'edit'])->name('editBeverage');
Route::put('/updateBeverage/{id}', [beveragesController::class, 'update'])->name('updateBeverage');
Route::delete('/deleteBeverage', [beveragesController::class, 'destroy'])->name('deleteBeverage');
Route::post('BeverageInserted', [beveragesController::class, 'store'])->name('BeverageInserted');
//Route::get('/admin/showBeverage/{id}', [beveragesController::class, 'show'])->name('showBeverage');
//Route::get('/admin/trashBeverage', [beveragesController::class, 'trash'])->name('trashBeverage');
//Route::get('/admin/restoreBeverage/{id}', [beveragesController::class, 'restore'])->name('restoreBeverage');
//Route::delete('/admin/forceDeleteBeverage', [beveragesController::class, 'forceDelete'])->name('forceDeleteBeverage');


///////////////////////////////////////////////////

// Categories Controller
Route::get('/admin/categories', [categoriesController::class, 'index'])->name('categories');
Route::get('/admin/addCategory', [categoriesController::class, 'create'])->name('addCategory');
Route::get('/admin/editCategory/{id}', [categoriesController::class, 'edit'])->name('editCategory');
Route::put('/updateCategory/{id}', [categoriesController::class, 'update'])->name('updateCategory');
Route::delete('/deleteCategory', [categoriesController::class, 'destroy'])->name('deleteCategory');
Route::post('CategoryInserted', [categoriesController::class, 'store'])->name('CategoryInserted');
//Route::get('/admin/trashCategory', [categoriesController::class, 'trash'])->name('trashCategory');
//Route::get('/admin/restoreCategory/{id}', [categoriesController::class, 'restore'])->name('restoreCategory');
//Route::delete('/admin/forceDeleteCategory', [categoriesController::class, 'forceDelete'])->name('forceDeleteCategory');


///////////////////////////////////////////////////


// Messages Controller
Route::get('/admin/messages', [messagesController::class, 'index'])->name('messages');
Route::get('/admin/showMessage/{id}', [messagesController::class, 'show'])->name('showMessage');
Route::get('/index', [messagesController::class, 'create'])->name('index');
Route::post('messageInserted', [messagesController::class, 'store'])->name('messageInserted');
Route::delete('/deleteMessage', [messagesController::class, 'destroy'])->name('deleteMessage');


//Route::get('/admin/trashCategory', [categoriesController::class, 'trash'])->name('trashCategory');
//Route::get('/admin/restoreCategory/{id}', [categoriesController::class, 'restore'])->name('restoreCategory');


