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

// // Soal 1
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// // Soal 2
// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/datang', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return '2241720221, Muhammad Rizky Fauzi';
// });

// // Soal 3
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

// // Soal 4
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan ID ' . $id;
// });

// // Soal 5
// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama saya ' . $name;
// });

// // Soal 6
// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

// Soal 7
Route::get('/user/profile', function () {
})->name('profile');