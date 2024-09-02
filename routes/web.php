<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\Admin\PolicyController as AdminPolicyController;
use App\Http\Controllers\Staff\PolicyController as StaffPolicyController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


use App\Http\Middleware\RoleMiddleware;

Route::get('/', [AuthenticatedSessionController::class, 'dashboard'])
->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::middleware(RoleMiddleware::class.':admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('staff', AdminStaffController::class);
        Route::resource('policies', AdminPolicyController::class);
    });

    Route::middleware(RoleMiddleware::class.':staff')->prefix('staff')->name('staff.')->group(function () {
        Route::get('policies', [StaffPolicyController::class, 'index'])->name('policies.index');
        Route::get('policies/{id}', [StaffPolicyController::class, 'show'])->name('policies.show');
    });
});


Route::get('staff/register/{token}', [AdminStaffController::class, 'showRegistrationForm'])->name('staff.register');
Route::post('staff/register', [AdminStaffController::class, 'register'])->name('staff.completeRegistration');