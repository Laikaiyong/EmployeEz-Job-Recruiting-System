<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\LinkedinSocialiteController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\GithubSocialiteController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ApplicationController;

use App\Models\User;
use App\Models\JobPost;
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
        'canRegister' => Route::has('register')
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

Route::get('/aboutus', function () {
    return Inertia::render('AboutUs', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('aboutus');

// Admin Deshboard View
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/home', function () {
    return Inertia::render('UserHome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('home');

Route::get('/jobs', function () {
    return Inertia::render('Jobs', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function($id){
    return Inertia::render('JobProfile', [
        'selectedJob' => JobPost::where('id', $id)->first()
    ]);
});


Route::get('/user/{id}/{name}', function($id, $name){
    return Inertia::render('UserProfile', [
        'selectedUser' => User::select("*")
                            ->where('id', $id)
                            ->where('name', $name)
                            ->get(),
    ]);
});

Route::get('/company', function () {
    return Inertia::render('Company', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('company');

// Recruiter Profile
Route::get('/company/profile', function () {
    return Inertia::render('CompanyProfile');
});

Route::resource('jobposts', JobPostingController::class);
Route::resource('application', ApplicationController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs/add', function () {
    return Inertia::render('JobsAdd');
});

Route::fallback(function() {
    return Inertia::render('404Error', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
});