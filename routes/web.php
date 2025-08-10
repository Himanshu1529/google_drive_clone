<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FileShareController;
use App\Http\Controllers\ManualPaymentController;
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



Route::group(['middleware' => 'admin'],function(){

	Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

	Route::get('admin/admin/list',[AdminController::class,'list']);
	Route::get('admin/admin/add',[AdminController::class,'add']);
	Route::post('admin/admin/add',[AdminController::class,'insert']);
	Route::get('admin/admin/edit/{id}',[AdminController::class,'edit']);
	Route::post('admin/admin/edit/{id}',[AdminController::class,'update']);
	Route::get('admin/admin/delete/{id}',[AdminController::class,'delete']);
	
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [FileController::class, 'dashboard'])->name('dashboard');
    Route::get('/all-files', [FileController::class, 'allFile'])->name('all.files');
    Route::get('/upload-file', [FileController::class, 'fileUpload'])->name('file');
    Route::post('/upload', [FileController::class, 'upload'])->name('file.upload');
    Route::post('/delete/{id}', [FileController::class, 'delete'])->name('file.delete');
    Route::get('/manual-payment/form', [ManualPaymentController::class, 'create'])->name('manual-payment.form');
    Route::post('/manual-payment/store', [ManualPaymentController::class, 'store'])->name('manual-payment.store');
});

Route::middleware(['auth', 'check.subscription'])->group(function () {
    Route::get('/recent-delete', [FileController::class, 'deleteFile'])->name('delete.files');
    Route::get('/share/{token}', [App\Http\Controllers\FileShareController::class, 'show'])->name('files.share');
    Route::get('/download/{id}', [FileController::class, 'download'])->name('file.download');
    Route::post('/restore/{id}', [FileController::class, 'restore'])->name('file.restore');
});


Route::get('admin',[AuthController::class,'login_admin']);
Route::post('admin',[AuthController::class,'auth_login_admin']);
Route::get('admin/logout',[AuthController::class,'logout_admin']);
Route::post('auth_register',[AuthController::class,'auth_register']);
Route::post('user/store',[AdminController::class,'store']);

Route::get('password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', function () {
    return view('auth.reset-password');
})->name('password.reset');

Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'auth_login']);
Route::get('logout',[AuthController::class,'logout']);




Route::get('/',[HomeController::class,'home'])->name('home');
