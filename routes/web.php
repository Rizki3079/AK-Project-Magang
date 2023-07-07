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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tampilan-awal', function () {
    return view('landing-page/tampilan-awal', [
        'title' => 'Tampilan Awal'
    ]);
});

Route::get('/talent-hunter', function () {
    return view('landing-page/talent-hunter', [
        'title' => 'Talent Hunter'
    ]);
});
