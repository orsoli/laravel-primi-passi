<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    // Create Variables
    $title = "First Laravel List";
    $sectionTitle = "Programing Language List";
    $progLangsList = [
                        "JavaScript",
                        "Python",
                        "Java",
                        "C++",
                        "PHP",
                        "Ruby",
                        "Swift",
                        "C#",
                        "Go",
                        "Kotlin"
                    ];

    return view('home', compact('title','sectionTitle','progLangsList'));
});

Route ::get('/header', function(){
    // Decleare Variables
    $title = 'Header';
    $webName = 'Lavarvel';
    $navBarList = [
        'Home',
        'About Us',
        'Services',
        'Contacts',
    ];

    // Return
    return view('header', compact('title','webName', 'navBarList'));
});