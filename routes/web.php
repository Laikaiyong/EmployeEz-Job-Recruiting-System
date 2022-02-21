<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\LinkedinSocialiteController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\GithubSocialiteController;

use App\Models\User;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Socialite Login
Route::prefix('google')->name('google.')->group( function(){
    Route::get('/auth', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('login');
    Route::any('/auth/callback', [GoogleSocialiteController::class, 'handleCallback'])->name('callback');
});

Route::prefix('linkedin')->name('linkedin.')->group( function(){
    Route::get('/auth', [LinkedinSocialiteController::class, 'redirectToLinkedin'])->name('login');
    Route::any('/auth/callback', [LinkedinSocialiteController::class, 'handleCallback'])->name('callback');
});

Route::prefix('github')->name('github.')->group( function(){
    Route::get('/auth', [GithubSocialiteController::class, 'redirectToGithub'])->name('login');
    Route::any('/auth/callback', [GithubSocialiteController::class, 'handleCallback'])->name('callback');
});

// Admin Deshboard View
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// Job Seeker Main Page
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function (User $user) {
    return Inertia::render('UserHome');
})->name('home');

// Recruiter Profile
Route::get('/company', function () {
    return Inertia::render('Company');
});