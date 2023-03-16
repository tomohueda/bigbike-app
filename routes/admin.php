<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

//Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->middleware('guest:admin')
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])
                ->middleware('guest:admin');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest:admin')
                ->name('login');
    // ログイン処理
    Route::post('login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest:admin');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest:admin')
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest:admin')
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest:admin')
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest:admin')
                ->name('password.store');
//});

//Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->middleware('auth:admin')
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('auth', 'throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth:admin')
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth:admin');

    Route::put('password', [PasswordController::class, 'update'])->name('password.update')
                ->middleware('auth:admin');
    //ログアウト処理
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    //->middleware('auth:admin')
    ->name('logout');
    
//});

