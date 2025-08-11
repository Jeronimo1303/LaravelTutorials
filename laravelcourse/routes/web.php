<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Change app to App in case it doesn't work.
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get(
    '/about',
    function () {
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "This is an About page ...";
        $author = "Developed by: Jeronimo Acosta";
        return view('home.about')->with('title', $data1)->with('subtitle', $data2)->with('description', $description)->with('author', $author);
    }
)->name("home.about");

Route::get(
    '/contact',
    function () {
        $email = "FRumeras@gmail.com";
        $address = "End of the worlds technically";
        $number = "4018751144";
        return view('home.contact')->with('email', $email)->with('address', $address)->with('number', $number);
    }
)->name("home.contact");


Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::get('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");