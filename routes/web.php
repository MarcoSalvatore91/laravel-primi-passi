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

Route::get('/', function () {

    $name = "Marco";

    return view('home', compact('name'));
})->name('home');

Route::get('/languages', function () {

    $data = [
        'languages' => [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP'
        ]
    ];

    return view('blog.languages', $data);
})->name('languages');

Route::get('/frameworks', function () {

    $data = [
        'frameworks' => [
            'Bootstrap',
            'Vue Cli',
            'Laravel'
        ]
    ];

    return view('blog.frameworks', $data);
})->name('frameworks');
