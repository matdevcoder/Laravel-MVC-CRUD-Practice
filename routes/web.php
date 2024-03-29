<?php

use Illuminate\Support\Facades\App;
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

App::setLocale("es");

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dogs', 'App\Http\Controllers\DogController')->middleware(['auth']);

Route::get('/dashboard', function () {
    return redirect('dogs');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
