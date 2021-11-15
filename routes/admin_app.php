<?php
use App\Http\Controllers\admin\DashboardController as AdminDashboard;

Route::prefix('admin/')->group(function(){
	Route::get('/',[AdminDashboard::class,'index'])->name('admin_dashboard');

	Route::prefix('master')->group(function(){

	});

});