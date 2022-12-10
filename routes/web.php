<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookiesPolicyController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsConditionController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'about'])->name('aboutus');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contactus', [HomeController::class, 'contact'])->name('contactus');
Route::get('/termsinfo', [HomeController::class, 'terms'])->name('termsinfo');
Route::get('/policyinfo', [HomeController::class, 'policy'])->name('policyinfo');
Route::get('/cookieinfo', [HomeController::class, 'cookie'])->name('cookieinfo');



Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () { return view('backend.dashboard'); })->name('dashboard');
    Route::get('/old', function () { return view('dashboard'); })->name('old');
    Route::resource('about',AboutController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('privacy',PrivacyPolicyController::class);
    Route::resource('terms',TermsConditionController::class);
    Route::resource('cookies',CookiesPolicyController::class);
});
