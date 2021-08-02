<?php

use App\Models\Title;
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
    return view('titles', [
        'titles' => Title::all()
    ]);
});

Route::get('title/{title:slug}', function (Title $title) {
    return view('title', [
        'title' => $title
    ]);
});
