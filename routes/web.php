<?php

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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/comics', function() {
    $data = [
        'comics' => config('comics')
    ];
    return view('comics.index', $data);
})->name('comics.index');

Route::get('/comic/{index}', function($index) {
    $comics = config('comics');
    if ( $index < count($comics) ) {
        $data = [
            'comic' => $comics[$index]
        ];
        return view('comics.show', $data);
    } else {
        abort(404);
    }
})->where('index', '[0-9]+')->name('comics.show');