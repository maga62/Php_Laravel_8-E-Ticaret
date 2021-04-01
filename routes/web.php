<?php

use App\Http\Controllers\HomeController;
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

Route::get('/eskihome', function () { // root cağırma şekli / belirtib ardından çalışacak fonk yada controller cağrıla bilir
    return view('welcome');

});
Route::redirect('/anasayfa', '/home')->name('anasayfa');// anasayfa yazılınca direk home gidilir


Route::get('/', function () { // root cağırma şekli 1. yontem / belirtib ardından çalışacak fonk yada controller cağrıla bilir
    return view('home.index',); //['name' => 'Muhammed Muhammedov'] içerde değişken şeklinde göndere biliriz ve index.blade.php de {{ $name }} şeklinde çağıra biliriz
});


Route::get('test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
Route::get('/home', [HomeController::class, 'index'])->name('home'); // root cağırma şekli 2. yontem
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


//admin
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
