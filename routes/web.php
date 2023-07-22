<?php


use App\Http\Controllers\MyprofController;
//use App\Http\Controllers\CheckoutController;
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
    return view('aboutme',['tittle'=>'About Me']);
});
Route::get('update', [MyprofController::class, 'update'])->name('update');
Route::get('tinypesa', [MyprofController::class, 'tinypesa'])->name('tinypesa');
Route::get('aboutme', [MyprofController::class, 'aboutme'])->name('aboutme');
Route::get('home', [MyprofController::class, 'home'])->name('home');
Route::get('contacts', [MyprofController::class, 'contacts'])->name('contacts');
Route::get('accomplishments', [MyprofController::class, 'accomplishments'])->name('accomplishments');
Route::get('awards', [MyprofController::class, 'awards'])->name('awards');
Route::get('education', [MyprofController::class, 'education'])->name('education');
Route::get('employment', [MyprofController::class, 'employment'])->name('employment');
Route::get('experience', [MyprofController::class, 'experience'])->name('experience');
Route::get('hobbies', [MyprofController::class, 'hobbies'])->name('hobbies');
Route::get('personal', [MyprofController::class, 'personal'])->name('personal');
Route::get('profession', [MyprofController::class, 'profession'])->name('profession');
Route::get('referees', [MyprofController::class, 'referees'])->name('referees');
Route::get('skills', [MyprofController::class, 'skills'])->name('skills');