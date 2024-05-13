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

Route::get('/ourteam', function () {
    return view('frontend.ourteam');
});

Route::get('/pricing', function () {
    return view('frontend.pricing');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/conditions', function () {
    return view('frontend.conditions');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/projects', function () {
    return view('frontend.all_projects');
});

Route::get('/web-design', function () {
    return view('frontend.detailsService.webDevelopment');
});

Route::get('/digital-marketing', function () {
    return view('frontend.detailsService.digitalMarketing');
});

Route::get('/cloud-hosting', function () {
    return view('frontend.detailsService.cloud-hosting');
});

Route::get('/mobile-app-design', function () {
    return view('frontend.detailsService.mobile-app-design');
});

Route::get('/application-desctop', function () {
    return view('frontend.detailsService.application-desctop');
});

Route::get('/design-services', function () {
    return view('frontend.detailsService.design-services');
});

Route::get('/technical-support', function () {
    return view('frontend.detailsService.technical-support');
});






