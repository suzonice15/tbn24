<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/program', 'api\ApiController@programList');
Route::get('/today/schedule', 'api\ApiController@today_schedule');
Route::get('/video', 'api\ApiController@video');
Route::get('/about', 'api\ApiController@about');


