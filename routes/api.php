 <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/program', 'api\ApiController@programList');
Route::get('/program/{id}', 'api\ApiController@singleProgram');
Route::get('/blogs', 'api\ApiController@blogs');
Route::get('/allVideos', 'api\ApiController@allVideos');
Route::get('/popularVideo', 'api\ApiController@popularVideo');
Route::get('/playlistVideo', 'api\ApiController@playlistVideo');
Route::get('/playlistVideo/{id}', 'api\ApiController@playlistVideoById');




Route::get('/selectBlogComment/{id}', 'api\ApiController@single_blog');
Route::post('mainComment/store', 'api\ApiController@mainComment');
Route::post('subComment/store', 'api\ApiController@subComment');

Route::get('/today/schedule', 'api\ApiController@today_schedule');
Route::get('/video', 'api\ApiController@video');
Route::get('/about', 'api\ApiController@about');
Route::post('/contact/store', 'api\ApiController@contact_store');
Route::post('/registration/store', 'api\ApiController@registration_store');




