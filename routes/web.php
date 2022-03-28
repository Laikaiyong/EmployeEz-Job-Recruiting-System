<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Http\Controllers\LinkedinSocialiteController;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\GithubSocialiteController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\VerifyController;

use App\Models\User;
use App\Models\JobPost;
use App\Models\Application as Apply;
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
        'companies' => User::select("*")
                            ->where('current_team_id', 2)
                            ->limit(3)
                            ->get(),
        'jobs' => JobPost::select("*")
                        ->orderBy('id', 'desc')
                        ->limit(3)
                        ->get()
    ]);
})->name('root');

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

Route::get('/support', function () {
    return Inertia::render('FAQSupport', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('faqsupport');

// Admin Deshboard View
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'applications' => Apply::select('*')
                            ->get(),
        'jobs' => JobPost::select('*')
                    ->get(),
        'totalCompanies' => User::select('*')
                        ->where('current_team_id', 2)
                        ->count(),
        'totalSeekers' => User::select('*')
                        ->where('current_team_id', 3)
                        ->count(),
        'totalAdmin' => User::select('*')
                        ->where('current_team_id', 1)
                        ->count(),
        'totalJobs' => JobPost::select('*')
                          ->count(),
        'totalApply' => Apply::select('*')
                          ->count(),
        'februaryJobs' => JobPost::select('*')
                          ->where('created_at', 'LIKE', '%-02-%')
                          ->count(),
        'marchJobs' => JobPost::select('*')
                          ->where('created_at', 'LIKE', '%-03-%')
                          ->count(),
        'aprilJobs' => JobPost::select('*')
                          ->where('created_at', 'LIKE', '%-04-%')
                          ->count(),
        'februaryApply' => Apply::select('*')
                          ->where('created_at', 'LIKE', '%-02-%')
                          ->count(),
        'marchApply' => Apply::select('*')
                          ->where('created_at', 'LIKE', '%-03-%')
                          ->count(),
        'aprilApply' => Apply::select('*')
                          ->where('created_at', 'LIKE', '%-04-%')
                          ->count(),
        'fullTimeJobs' => JobPost::select('*')
                            ->where('type', 'Full-time')
                            ->count(),
        'partTimeJobs' => JobPost::select('*')
                            ->where('type', 'Part-time')
                            ->count(),
        'internshipJobs' => JobPost::select('*')
                            ->where('type', 'Internship')
                            ->count(),
        'contractJobs' => JobPost::select('*')
                            ->where('type', 'Contract')
                            ->count(),
        'fullTimeApply' => Apply::select('*')
                            ->where('jobpost_type', 'Full-time')
                            ->count(),
        'partTimeApply' => Apply::select('*')
                            ->where('jobpost_type', 'Part-time')
                            ->count(),
        'internshipApply' => Apply::select('*')
                            ->where('jobpost_type', 'Internship')
                            ->count(),
        'contractApply' => Apply::select('*')
                            ->where('jobpost_type', 'Contract')
                            ->count(),
        'techCompanies' => User::select('*')
                            ->where('type', 'Technology')
                            ->count(),
        'financeCompanies' => User::select('*')
                            ->where('type', 'Finance')
                            ->count(),
        'engineeringCompanies' => User::select('*')
                            ->where('type', 'Engineering')
                            ->count(),
        'otherCompanies' => User::select('*')
                            ->where('current_team_id', 2)
                            ->where('type', '!=', 'Technology')
                            ->where('type', '!=', 'Finance')
                            ->where('type', '!=', 'Engineering')
                            ->count(),
    ]);
})->name('dashboard');

Route::get('/jobs', function (Request $request) {
    return Inertia::render('Jobs', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'jobs' => JobPost::select("*")
                ->orderBy('id', 'desc')
                ->when($request->keyword, 
                    function($query, $keyword) {
                        $query->where('title', 'LIKE', '%' .$keyword.'%');      
        })->paginate(6)
    ]);
})->name('jobs');


Route::middleware(['auth:sanctum', 'verified'])->get('/jobs/applied', function(){
    return Inertia::render('JobsApplyList', [
        'applied_jobs' => Apply::select('*')->orderBy('id', 'desc')->get(),
    ]);
})->name('jobs.applied');

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs/add', function () {
    return Inertia::render('JobsAdd');
})->name('jobs.add');
Route::post('/jobs/add', 'JobPostingController@store');

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs/created', function () {
    return Inertia::render('JobsCreated', [
        'created_jobs' => JobPost::select('*')->orderBy('id', 'desc')->get()
    ]);
})->name('jobs.created');

Route::get('/jobs/{id}', function($id){
    return Inertia::render('JobProfile', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'selectedJob' => JobPost::where('id', $id)->first(),
        'relatedJobs' => JobPost::select("*")
                        ->orderBy('id', 'desc')
                        ->limit(3)
                        ->get(),
    ]);
})->where(['id' => '[0-9]+'])->name('jobs.profile');

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs/{id}/edit', function($id){
    return Inertia::render('JobsEdit', [
        'selectedJob' => JobPost::where('id', $id)->first()
    ]);
})->where(['id' => '[0-9]+'])->name('jobs.edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/jobs/{id}/apply', function ($id) {
    return Inertia::render('ApplicationRequest', [
        'selectedJob' => JobPost::where('id', $id)->first()
    ]);
})->where(['id' => '[0-9]+'])->name('jobs.apply');

Route::middleware(['auth:sanctum', 'verified'])->get('/apply', function () {
    return Inertia::render('ViewApplications', [
        'applications' => Apply::select('*')->get()
    ]);
})->name('application.list');

Route::middleware(['auth:sanctum', 'verified'])->get('/apply/{id}', function ($id) {
    return Inertia::render('ApplicationProfile', [
        'selectedApply' => Apply::where('id', $id)->first()
    ]);
})->where(['id' => '[0-9]+'])->name('application.profile');

Route::get('/user/{id}/{name}', function(Request $request, $id, $name){
    return Inertia::render('UserProfile', [
        'selectedUser' => User::select("*")
                            ->where('id', $id)
                            ->where('name', $name)
                            ->get(),
    ]);
})->where(['id' => '[0-9]+'])->name('user.profile');

Route::get('/company', function (Request $request) {
    return Inertia::render('Company', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'companies' => User::select("*")
                        ->where('current_team_id', 2)
                        ->when($request->keyword, 
                            function($query, $keyword) {
                                $query->where('name', 'LIKE', '%' .$keyword.'%');      
        })->paginate(6)
    ]);
})->name('company');

Route::resource('jobposts', JobPostingController::class);
Route::resource('application', ApplicationController::class);
Route::resource('verify', VerifyController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/task', function () {
    return Inertia::render('Task', [
        'unverified' => User::select('*')
                        ->where('current_team_id', 2)
                        ->where('verified', NULL)
                        ->get()
    ]);
})->name('task');

Route::fallback(function() {
    return Inertia::render('404Error', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
});