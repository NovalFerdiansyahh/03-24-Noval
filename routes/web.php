<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ["title" => "Home"]);
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
    return view('gallery', ["title" => "Gallery"]);
});

