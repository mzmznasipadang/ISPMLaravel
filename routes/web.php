<?php

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
    return view('home', [
        "test" => content::all(),
    ]);
});
Route::get('/add-new-content', function () {
    return view('add-new-content');
});
Route::get('/edit-content', function ()
    {
        return view('edit-content');
    });  
