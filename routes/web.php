<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/blog_card', function () {
    return view('pages.blog_card');
});
Route::get('/blog_single', function () {
    return view('pages.blog_single');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/appointmentForm', 'MainController@postAppointment');