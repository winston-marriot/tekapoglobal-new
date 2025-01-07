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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/contact-us',function()
{
    return view('contact');
})->name('contact.us');


Route::get('/',function()
{
    return view('home');
})->name('home');

Route::get('/about-us',function()
{
    return view('aboutUs');
})->name('about.us');

Route::get('/services',function()
{
    return view('services');
})->name('services');

Route::get('/structural-engineering',function()
{
    return view('structuralEngineering');
})->name('structural.engineering');

Route::get('/value-engineering',function()
{
    return view('valueEngineering');
})->name('value.engineering');

// Route::get('/structural-engineering',function()
// {
//     return view('structuralEngineering');
// })->name('structural.engineering');

// Route::get('/structural-engineering',function()
// {
//     return view('structuralEngineering');
// })->name('structural.engineering');

// Route::get('/structural-engineering',function()
// {
//     return view('structuralEngineering');
// })->name('structural.engineering');
