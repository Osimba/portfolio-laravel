<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\File;

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
    return view('index');
})->name('home');
Route::get('/projects/taskapp', function () {
    return File::get(public_path() . '/demos/taskapp');
});
Route::post('/send-message', [MessagesController::class, 'sendMessage'])->name('send.message');