<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-home', [App\Http\Controllers\HomeController::class, 'user_home'])->name('user-home');


Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('group-form',[App\Http\Controllers\BloodController::class ,'group_form'])->name('group_form');
    Route::get('view-group',[App\Http\Controllers\BloodController::class ,'groupview'])->name('groupview');
    Route::post('save-group',[App\Http\Controllers\BloodController::class ,'save_group'])->name('save_group');
    Route::get('deletegroup/{id}',[App\Http\Controllers\BloodController::class ,'deletegroup'])->name('deletegroup');
    Route::get('editgroup/{id}',[App\Http\Controllers\BloodController::class ,'editgroup'])->name('editgroup');
    Route::post('update-group/{id}',[App\Http\Controllers\BloodController::class ,'update'])->name('update');



    // user
    Route::get('donorform',[App\Http\Controllers\UserController::class ,'donorform'])->name('donorform');
    Route::post('donor-save',[App\Http\Controllers\UserController::class ,'donor_save'])->name('donor-save');
    Route::get('view-history',[App\Http\Controllers\UserController::class ,'view_history'])->name('view-history');
    Route::get('history',[App\Http\Controllers\UserController::class ,'admin_history'])->name('admin-history');
    Route::get('edit-history/{id}',[App\Http\Controllers\UserController::class ,'edit_history'])->name('edit-history');
    Route::post('history-edit/{id}',[App\Http\Controllers\UserController::class ,'history_save'])->name('history-save');
    Route::get('deletehistory/{id}',[App\Http\Controllers\UserController::class ,'delete_history'])->name('delete_history');
    


});
