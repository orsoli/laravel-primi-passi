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

 // Home
Route::get('/home', function () {
    // Create Variables
    $title = "First Laravel List";
    $logo = 'LOGO';
    $navBarList = [
        'Home',
        'About Us',
        'Services',
        'Contacts',
    ];
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

    return view('home', compact('title','logo','navBarList','sectionTitle','progLangsList'));
});

// About Us
Route::get('/about', function () {
    // Create Variables
    $title = 'About Us';
    $description = 'Founded in [2024], Our company was born out of a desire to simplify the learning journey for anyone interested in coding. Our team consists of experienced developers, educators, and tech lovers who understand the challenges faced by beginners and professionals alike. We believe that learning programming should be accessible, engaging, and effective.';

    return view('about', compact('title', 'description'));
});

// Services
Route::get('/services', function () {
    // Create Variables
    $title = 'Services';
    $services = [
                    'Custom Web Application Development',
                    'API Development',
                    'E-commerce Solutions',
                    'Content Management Systems (CMS)',
                    'Performance Optimization',
                    'Security Audits',
                    'Maintenance & Support',
                    'Migration to Laravel',
                    'Training & Workshops',
                    'Consultation Services'
                ];


    return view('services', compact('title', 'services'));
});

// Contacts
Route::get('/home', function () {
    // Create Variables
    $title = 'About Us';

    return view('home', compact('title'));
});