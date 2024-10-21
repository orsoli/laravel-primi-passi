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
    $localhost = 'localhost:8000/';
    $navBarList = [
        'Home',
        'About',
        'Services',
        'Contact',
    ];
    $sectionTitle = "Programing Language List";
    $progLangsList = [
        [
            "name" => "JavaScript",
            "image" => "http://images.pexels.com/photos/11035363/pexels-photo-11035363.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "description" => "JavaScript is a versatile programming language primarily used for web development.",
            "url" => "http://www.w3schools.com/js/"

        ],
        [
            "name" => "Python",
            "image" => "http://images.pexels.com/photos/11035474/pexels-photo-11035474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "description" => "Python is known for its readability and is widely used in data science, web development, and automation.",
            "url" => "http://www.w3schools.com/python/"
        ],
        [
            "name" => "Java",
            "image" => "http://images.pexels.com/photos/11035360/pexels-photo-11035360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "description" => "Java is a class-based, object-oriented programming language used for building platform-independent applications.",
            "url" => "http://www.w3schools.com/java/"

        ],
        [
            "name" => "C++",
            "image" => "http://images.pexels.com/photos/11035472/pexels-photo-11035472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "description" => "C++ is an extension of the C programming language, commonly used for system/software development and game programming.",
            "url" => "http://www.w3schools.com/cpp/"

        ],
        [
            "name" => "PHP",
            "image" => "http://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "description" => "PHP is a popular server-side scripting language used for web development and creating dynamic web pages.",
            "url" => "http://www.w3schools.com/php/"

        ],
    ];

    return view('home', compact('title','logo','localhost','navBarList','sectionTitle','progLangsList'));
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
Route::get('/contact', function () {
    // Create Variables
    $title = 'Contacts';
    $contacts = [
                    'phone: +39 32x xxx xxx',
                    'email: programming@gmail.com',
                    'Twitter: Programing Languages',
                    'Instagram: Programing Langages',
                    'Facebook: Programing Languages',
                    'Youtube: Programing Languages',
    ];

    return view('contact', compact('title', 'contacts'));
});