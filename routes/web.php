<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['Nama'=> 'Indra Gunawan Ardiansyah']);
});

Route::get('/about', function () {
    return view('about',['Nama'=> 'Indra Gunawan Ardiansyah']);
});

Route::get('/blog', function () {
    return view('blog',['Nama'=> 'Indra Gunawan Ardiansyah']);
});

Route::get('/contact', function () {
    return view('contact',['Nama'=> 'Indra Gunawan Ardiansyah']);
});
