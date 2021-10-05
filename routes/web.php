<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/register-supporter', 'SupporterController@registerSupporterView')->name('register-supporter-view');
Route::post('/register-supporter', 'SupporterController@registerSupporter')->name('register-supporter');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'CoordinatorController@index')->name('home');
    Route::get('/candidate', 'CoordinatorController@candidateView')->name('candidate');
    Route::get('/agitator', 'CoordinatorController@agitatorView')->name('agitators');
    Route::get('/supporter', 'SupporterController@index')->name('supporter');

    Route::get('/register-candidate', 'CoordinatorController@registerCandidateView')->name('register-candidate-view');
    Route::get('/register-agitator', 'CoordinatorController@registerAgitatorView')->name('register-agitator-view');

    Route::post('/register-candidate', 'CoordinatorController@registerCandidate')->name('register-candidate');
    Route::post('/register-agitator', 'CoordinatorController@registerAgitator')->name('register-agitator');

    Route::get('/generate-referral-link', 'HomeController@generateReferralLink')->name('generate-referral-link');
});

