<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\backend\{
    EmployeeController,
    DepartmentController,
};

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



Route::group(['middleware' => 'prevent-back-history'],function(){

    //homepage
    Route::get('/', function () {
        return view('backend.frontend');
    });

    //dashboard
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard',[HomeController::class,'getDashboard'])->name('dashboard');
    });

});

    //employee section
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::resource('employee', EmployeeController::class);
    });

    //department section
    Route::middleware(['auth','verified'])->group(function() {
        Route::resource('department', DepartmentController::class);
    });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
