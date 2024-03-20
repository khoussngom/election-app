<?php




use Illuminate\Http\Request;

Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/regis', function () {
    return view('register');
});



