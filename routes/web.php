<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\UserController;
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

Route::get('/', [Controller::class, 'homePage'])->name('homepage');
Route::get('search', [Controller::class, 'searchPage'])->name('search-results');
Route::get('policy', [Controller::class, 'policyPage'])->name('policy');
Route::get('watching', [AnimeController::class, 'watchingPage'])->name('watching');
Route::get('filter', [AnimeController::class, 'filterPage'])->name('filter');
Route::get('watch-history', [AnimeController::class, 'watchHistoryPage'])->name('watch-history');

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('profile', [UserController::class, 'profilePage'])->name('profile');
Route::get('edit-profile', [UserController::class, 'editProfilePage'])->name('edit-profile');

Route::get('following', [FollowingController::class, 'followingPage'])->name('following');


