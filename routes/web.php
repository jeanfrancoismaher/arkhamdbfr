<?php

use App\Models\Title;
use App\Models\Category;
use App\Models\Campaign;
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

Route::get('category/{category:slug}', function (Category $category) {
    return view('titles', [
        'titles' => $category->titles,
        'categories' => Category::all(),
        'currentCategory' => $category
    ]);
});

Route::get('campaign/{campaign:slug}', function (Campaign $campaign) {
    return view('titles', [
        'titles' => $campaign->titles,
        'categories' => Category::all()
    ]);
});