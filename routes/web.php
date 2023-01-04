<?php

use App\Http\Controllers\HomeController;
use App\Models\Home;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('home', HomeController::class);

Route::get('/', function () {
    return view('layout.home');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/account', function () {
    return view('dashboard.account');
});

Route::get('/dashbooard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/conction', function () {
    return view('dashboard.acoount-setting-conction');
});
