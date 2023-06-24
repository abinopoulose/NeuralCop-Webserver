<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/add_police', [App\Http\Controllers\HomeController::class, 'add_police']);
Route::get('/add_security', [App\Http\Controllers\HomeController::class, 'add_security']);
Route::get('/security_list', [App\Http\Controllers\HomeController::class, 'security_list']);
Route::get('/police_list', [App\Http\Controllers\HomeController::class, 'police_list']);

Route::get('/threat_detected', [App\Http\Controllers\HomeController::class, 'threat_detected']);
Route::get('/threat_forwarded', [App\Http\Controllers\HomeController::class, 'threat_forwarded']);



Route::post('/new_police', [App\Http\Controllers\HomeController::class, 'new_police']);
Route::post('/new_security', [App\Http\Controllers\HomeController::class, 'new_security']);


Route::get('/delete_security/{id}', [App\Http\Controllers\HomeController::class, 'delete_security']);
Route::get('/delete_police/{id}', [App\Http\Controllers\HomeController::class, 'delete_police']);


Route::get('/false_positive/{id}', [App\Http\Controllers\HomeController::class, 'false_positive']);
Route::get('/forward/{id}', [App\Http\Controllers\HomeController::class, 'forward']);
Route::get('/resolved/{id}', [App\Http\Controllers\HomeController::class, 'resolved']);






Route::post('/api/login', [App\Http\Controllers\api::class, 'login'] );

Route::get('/api/security_profile/{id}', [App\Http\Controllers\api::class, 'security_profile'] );
Route::get('/api/police_profile/{id}', [App\Http\Controllers\api::class, 'police_profile'] );

Route::get('/api/security_home', [App\Http\Controllers\api::class, 'security_home'] );
Route::get('/api/police_home', [App\Http\Controllers\api::class, 'police_home'] );

Route::get('/api/false_positive/{id}', [App\Http\Controllers\api::class, 'false_positive'] );
Route::get('/api/forward/{id}', [App\Http\Controllers\api::class, 'forward'] );



