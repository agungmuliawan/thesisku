<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::any('/home', [AuthController::class,'home_auth'])->name('home_auth');
Route::middleware('guest')->group(function(){
	Route::get('/login', [AuthController::class,'index'])->name('login');
	Route::post('/submit-login', [AuthController::class,'submit'])->name('submit_login');
});
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/', [AuthController::class,'index'])->name('front_home');

require_once 'admin_app.php';