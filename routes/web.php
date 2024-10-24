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

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/services', function () {
    return view('frontend.services');
});


Route::get('/solutions', function () {
    return view('frontend.solutions');
});



Route::get('/systems', function () {
    return view('frontend.systems');
});


Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});


Route::get('/mobile-app-design', function () {
    return view('frontend.services.mobile-app-design');
});

Route::get('/web-design', function () {
    return view('frontend.services.web-design');
});

Route::get('/technical-analysis', function () {
    return view('frontend.services.technical-analysis');
});


Route::get('/design-services', function () {
    return view('frontend.services.design-services');
});


Route::get('/software-testing', function () {
    return view('frontend.services.software-testing');
});



Route::get('/server-management', function () {
    return view('frontend.services.server-management');
});



Route::get('/web-hosting', function () {
    return view('frontend.services.web-hosting');
});


Route::get('/dedicated-server', function () {
    return view('frontend.services.dedicated-server');
});



Route::get('/project-management', function () {
    return view('frontend.services.project-management');
});



Route::get('/technical-support', function () {
    return view('frontend.services.technical-support');
});


Route::get('/digital-marketing', function () {
    return view('frontend.services.digital-marketing');
});




































