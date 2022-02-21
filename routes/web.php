<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index', [
        "title" => "Beranda"]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "nama" => "Noval Ferdiansyah",
        "email" => "3103120168@student.smktelkom-pwt.sch.id",
        "gambar" => "noval.jpg"
    ]);
});

Route::get('/gallery', function(){
    return view('gallery', [
        "title" => "Gallery"]);
});

Route::resource('/contacts', ContactController::class);


Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

