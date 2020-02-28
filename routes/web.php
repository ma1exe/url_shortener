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
    $short_urls = DB::table('short_urls')->orderBy('added_on', 'desc')->limit(13)->get();
    return view('index', ['short_urls' => $short_urls]);
});

Route::get('/{short_url}', 'ShortenerController@checkShortUrl');

Route::post('/short', 'ShortenerController@createShortUrl');