<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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
// Route::get('/user', function () {
   
// });
// Route::get('/user/{id}', function () {
// });

// Route::get('users/{name}', [Users::class, 'user']);


// Route::view('user', $user);
// Route::get('user/{name}', [Users::class, 'loadView']);
// Route::view('about','about' );
// Route::view('user','user' );
// Route::get('/user', [Users::class, 'index']);
Route::get('/user', [Users::class, 'show']);
Route::get('/create', [Users::class, 'create']);
Route::get('/edit/{id}', [Users::class, 'edit']);
Route::post('/update', [Users::class, 'update']);
Route::post('/user', [Users::class, 'store']);
Route::get('delete/{id}', [Users::class, 'destroy']);