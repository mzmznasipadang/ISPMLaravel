<?php

use App\Http\Controllers\AuthController;
use App\Models\content;
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
<<<<<<< HEAD
    return view('landing-page');
=======
    return view('landing-page', [
        // "test" => content::all(),
    ]);
});

Route::get('/loginPage', function () {
    return view('loginPage', [
        "test" => content::all(),
    ]);
});

Route::get('/add-new-content', function () {
    return view('add-new-content');
});

Route::get('/edit-content', function () {
    return view('edit-content');
>>>>>>> 205a3d75786cecece2b6bbcbc4f1f254221a5709
});
Route::get('/auth/redirect', [AuthController::class, 'redirect']);
Route::get('/auth/callback', [AuthController::class, 'callback']);
