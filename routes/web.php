<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return 'view('welcome')';
});
*/


Route::view('add', 'stud_create');
Route::post('add', [testController::class, 'insert']);

Route::get('/stud_create', function () {
    return view('stud_create');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::get('footer', [\App\Http\Controllers\FooterController::class, 'index']);


Route::get('/productData', [testController::class, 'DataTableIndex']);

