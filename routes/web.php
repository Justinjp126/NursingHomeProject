<?php
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
Route::get('/', 'WelcomeController@index');
Route::get('/home.html', 'WelcomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/about.html', 'AboutController@index');
Route::get('/participate/submit', 'JoinController@submit');
Route::get('/participate', 'ParticipateController@index');
Route::get('/participate.html', 'ParticipateController@index');
Route::get('/get_involved.php', 'ParticipateController@index');
Route::get('/participate/{nursing_home}', 'JoinController@index')->name("DONATE");
Route::get('/resources', 'ResourcesController@index');
Route::get('/resources.html', 'ResourcesController@index');
Route::get('/donate', 'DonateController@index');
Route::get('/donate.html', 'DonateController@index');
Route::get('/contact', 'SendEmailController@index');
Route::get('/contact.html', 'SendEmailController@index');
Route::get('/user-dashboard', function() {
    return view('user-dashboard');
});
Route::get('/logout/final', 'Auth\LoginController@logout');
Route::post('/contact/send', 'SendEmailController@send');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
