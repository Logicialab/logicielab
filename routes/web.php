<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SystemsController;
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



Route::get('/', [HomeController::class, 'index'])->name('frontend.home');



Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');


Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('index');
    Route::get('/mobile-app-design', [ServicesController::class, 'mobileAppDesign'])->name('mobile.app.design');
    Route::get('/web-design', [ServicesController::class, 'webDesign'])->name('web.design');
    Route::get('/technical-analysis', [ServicesController::class, 'technicalAnalysis'])->name('technical.analysis');
    Route::get('/design-services', [ServicesController::class, 'designServices'])->name('design.services');
    Route::get('/software-testing', [ServicesController::class, 'softwareTesting'])->name('software.testing');
    Route::get('/server-management', [ServicesController::class, 'serverManagement'])->name('server.management');
    Route::get('/web-hosting', [ServicesController::class, 'webHosting'])->name('web.hosting');
    Route::get('/dedicated-server', [ServicesController::class, 'dedicatedServer'])->name('dedicated.server');
    Route::get('/digital-marketing', [ServicesController::class, 'digitalMarketing'])->name('digital.marketing');
});



Route::get('/solutions', [SolutionController::class, 'index'])->name('frontend.solutions');


Route::get('/systems', [SystemsController::class, 'index'])->name('frontend.systems');


Route::get('/contact-us', [ContactUsController::class, 'index'])->name('frontend.contact-us');
























































