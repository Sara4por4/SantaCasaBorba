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
    return view('front.welcome');
});

Route::get('/about', function () {
    return view('front.pages.about.index');
});

Route::get('/social', function () {
    return view('front.pages.social.index');
});

Route::get('/social-detail', function () {
    return view('front.pages.social.show');
});

Route::get('/agenda', function () {
    return view('front.pages.agenda.index');
});

Route::get('/infos1', function () {
    return view('front.pages.infos.index1');
});

Route::get('/infos', function () {
    return view('front.pages.infos.index');
});

Route::get('/contacts', function () {
    return view('front.pages.contacts.index');
});

Route::get('/communication', function () {
    return view('front.pages.communication.index');
});

Route::get('/communication-detail', function () {
    return view('front.pages.communication.show');
});

Route::get('/terms', function () {
    return view('front.pages.terms.index');
});
