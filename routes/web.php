<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\DataController;
use App\Http\Livewire\Menu;

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
Route::view('home', '/home');
Route::get('/profile', function () {
    return view('profile', ['nama' => 'Adib Ardianto']);
});

Auth::routes();
Route::get('/menu', Menu::class, 'render' );
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
