<?php

use Illuminate\Support\Facades\Route;


Route::get('/', "SiteController@viewHome")->name('home');

