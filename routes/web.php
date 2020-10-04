<?php

use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\admin\ProgramController;

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


/*           website  url */

Route::get('/', 'HomeController@index');
Route::get('/all-program', 'HomeController@all_program');
Route::get('ajax_program', 'HomeController@ajax_program');
Route::get('/program-details/{id}', 'HomeController@single_program');
Route::get('/about-us', 'HomeController@about');
Route::get('/documents', 'HomeController@documents');
Route::get('/contact', 'HomeController@contact');
Route::get('/home_page_program', 'HomeController@home_page_program');
Route::post('/modal/login', 'HomeController@modal_login');
Route::post('/contact', 'HomeController@contact_store');
Route::get('/today-schedule', 'HomeController@today_schedule');
Route::get('/program-video', 'HomeController@programVideo');
Route::get('/youtube-playlist/{any}', 'HomeController@youtubePlaylist');

/****=============== admin faq section    =====================  ******/
Route::get('admin/faq', 'admin\FaqController@index');
Route::get('admin/faq/create', 'admin\FaqController@create');
Route::post('admin/faq/store', 'admin\FaqController@store');
Route::post('admin/faq/update/{id}', 'admin\FaqController@update');
Route::get('admin/faq/{id}', 'admin\FaqController@edit');
Route::get('/admin/faq/delete/{id}', 'admin\FaqController@delete');
Route::get('faq/pagination', 'admin\FaqController@pagination');


/****=============== admin news section    =====================  ******/
Route::get('admin/news', 'admin\NewsController@index');
Route::get('admin/news/create', 'admin\NewsController@create');
Route::post('admin/news/store', 'admin\NewsController@store');
Route::post('admin/news/update/{id}', 'admin\NewsController@update');
Route::get('admin/news/{id}', 'admin\NewsController@edit');
Route::get('/admin/news/delete/{id}', 'admin\NewsController@delete');
Route::get('news/pagination', 'admin\NewsController@pagination');




/****=============== admin Pull section    =====================  ******/
Route::get('admin/pulls', 'admin\PullController@index');
Route::get('admin/pulls/create', 'admin\PullController@create');
Route::post('admin/pulls/store', 'admin\PullController@store');
Route::post('admin/pulls/update/{id}', 'admin\PullController@update');
Route::get('admin/pulls/{id}', 'admin\PullController@edit');
Route::get('/admin/pulls/delete/{id}', 'admin\PullController@delete');
Route::get('pulls/pagination', 'admin\PullController@pagination');



/****===============  Pull Result section    =====================  ******/
Route::get('admin/pull/result', 'admin\PullController@pull_result');
Route::get('admin/pull/result/create', 'admin\PullController@create');
Route::post('admin/pull/result/store', 'admin\PullController@store');
Route::post('admin/pull/result/update/{id}', 'admin\PullController@update');
Route::get('admin/pull/result/{id}', 'admin\PullController@edit');
Route::get('/admin/pull/result/delete/{id}', 'admin\PullController@delete');
Route::get('pulls/pagination', 'admin\PullController@pagination');





/****=============== admin program section    =====================  ******/
Route::get('admin/programs', 'admin\ProgramController@index');
Route::get('admin/programs/create', 'admin\ProgramController@create');
Route::post('admin/programs/store', 'admin\ProgramController@store');
Route::post('admin/programs/update/{id}', 'admin\ProgramController@update');
Route::get('admin/programs/{id}', 'admin\ProgramController@edit');
Route::get('/admin/programs/delete/{id}', 'admin\ProgramController@delete');
Route::get('program/pagination', 'admin\ProgramController@pagination');




/****=============== admin schedules section    =====================  ******/
Route::get('admin/schedules', 'admin\ScheduleController@index');
Route::get('admin/schedules/create', 'admin\ScheduleController@create');
Route::post('admin/schedules/store', 'admin\ScheduleController@store');
Route::post('admin/schedules/update/{id}', 'admin\ScheduleController@update');
Route::get('admin/schedules/{id}', 'admin\ScheduleController@edit');
Route::get('/admin/schedules/delete/{id}', 'admin\ScheduleController@delete');
Route::get('schedules/pagination', 'admin\ScheduleController@pagination');
Route::get('schedules/pagination_by_program_id', 'admin\ScheduleController@pagination_by_program_id');





/****=============== admin weekly schedules section    =====================  ******/
Route::get('admin/schedule-weekly', 'admin\ScheduleController@schedule_weekly');
Route::get('/admin/schedule-weekly/delete/{id}', 'admin\ScheduleController@schedule_weekly_delete');
Route::post('admin/schedule-weekly/store', 'admin\ScheduleController@schedule_weekly_store');
Route::get('admin/schedule-weekly/create', 'admin\ScheduleController@schedule_weekly_create');
Route::post('admin/schedule-weekly/update/{id}', 'admin\ScheduleController@schedule_weekly_update');
Route::get('admin/schedule-weekly/{id}', 'admin\ScheduleController@schedule_weekly_edit');
Route::get('/admin/schedules/delete/{id}', 'admin\ScheduleController@delete');
Route::get('schedules/pagination', 'admin\ScheduleController@pagination');
Route::get('schedules/pagination_by_program_id', 'admin\ScheduleController@pagination_by_program_id');
Route::get('schedules/fetch_data_using_week', 'admin\ScheduleController@fetch_data_using_week');
Route::get('schedules/fetch_data_using_program_week', 'admin\ScheduleController@fetch_data_using_program_week');




/****=============== admin weekly schedules section    =====================  ******/
Route::get('schedules/schedule-weekly-day-view', 'admin\ScheduleController@schedule_weekly_day_view');




/****=============== app setting  section    =====================  ******/
Route::get('admin/app-setting', 'admin\SettingController@appSetting');
Route::post('admin/app-setting', 'admin\SettingController@appSetting_store');










Route::get('/admin', 'admin\AdminController@login');
Route::post('/login_check', 'admin\AdminController@loginCheck');
Route::get('/dashboard', 'admin\DashboardController@index');


/****=============== admin  user section    =====================  ******/

Route::get('admin/users', 'admin\AdminController@index');
Route::get('admin/user/create', 'admin\AdminController@create');
Route::post('admin/user/store', 'admin\AdminController@store');
Route::post('admin/user/update/{id}', 'admin\AdminController@update');
Route::get('admin/user/{id}', 'admin\AdminController@edit');
Route::get('/admin/user/delete/{id}', 'admin\AdminController@delete');
Route::get('logout', 'admin\AdminController@logout');
Route::get('admin/contact-us', 'admin\AdminController@contact_us');
Route::get('message/seen/{id}', 'admin\AdminController@message_seen');
Route::get('admin/pagination_contact_us', 'admin\AdminController@pagination_contact_us');

Route::get('admin/website/user', 'admin\AdminController@websiteUser');
Route::get('website/user/pagination/fetch_data', 'admin\AdminController@websiteUserPagination');
Route::get('admin/website/user/delete/{id}', 'admin\AdminController@websiteUserDelete');







/****=============== category section    =====================  ******/
Route::get('admin/categories', 'admin\CategoryController@index');
Route::get('admin/category/create', 'admin\CategoryController@create');
Route::post('admin/category/store', 'admin\CategoryController@store');
Route::post('admin/category/update/{id}', 'admin\CategoryController@update');
Route::get('admin/category/{id}', 'admin\CategoryController@edit');
Route::get('/admin/category/delete/{id}', 'admin\CategoryController@delete');
Route::get('category/pagination/fetch_data', 'admin\CategoryController@fetch_data');



/****=============== category section    =====================  ******/
Route::get('admin/playlist', 'admin\PlaylistController@index');
Route::get('admin/playlist/create', 'admin\PlaylistController@create');
Route::post('admin/playlist/store', 'admin\PlaylistController@store');
Route::post('admin/playlist/update/{id}', 'admin\PlaylistController@update');
Route::get('admin/playlist/{id}', 'admin\PlaylistController@edit');
Route::get('/admin/playlist/delete/{id}', 'admin\PlaylistController@delete');
Route::get('playlist/pagination/fetch_data', 'admin\PlaylistController@fetch_data');


/****=============== admin page section    =====================  ******/
Route::get('admin/pages', 'admin\PageController@index');
 Route::get('admin/page/create', 'admin\PageController@create');
Route::post('admin/page/store', 'admin\PageController@store');
Route::post('admin/page/update/{id}', 'admin\PageController@update');
Route::get('admin/page/{id}', 'admin\PageController@edit');
Route::get('/admin/page/delete/{id}', 'admin\PageController@delete');


/****=============== home page setting section    =====================  ******/
Route::get('admin/homepage/setting', 'admin\SettingController@homePageSetting');
Route::post('admin/homepage/setting', 'admin\SettingController@homePageSetting');

Route::get('admin/default/setting', 'admin\SettingController@defaultSetting');
Route::post('admin/default/setting', 'admin\SettingController@defaultSetting');
Route::get('admin/social/setting', 'admin\SettingController@socialSetting');
Route::post('admin/social/setting', 'admin\SettingController@socialSetting');



/****=============== product section    =====================  ******/
Route::get('admin/products', 'admin\ProductController@index');
Route::post('product-urlcheck', 'admin\ProductController@urlCheck')->name('product.urlcheck');
Route::post('product-foldercheck', 'admin\ProductController@foldercheck')->name('product.foldercheck');
Route::get('admin/product/create', 'admin\ProductController@create');
Route::post('admin/product/store', 'admin\ProductController@store');
Route::post('admin/product/update/{id}', 'admin\ProductController@update');
Route::get('admin/product/update/{id}', 'admin\ProductController@date_update');
Route::get('/admin/product/{id}', 'admin\ProductController@edit');
Route::get('/admin/product/delete/{id}', 'admin\ProductController@destroy');
Route::get('products/pagination', 'admin\ProductController@pagination');



/****=============== media section    =====================  ******/
Route::get('admin/media', 'admin\MediaController@index');
Route::get('admin/media/create', 'admin\MediaController@create');
Route::post('admin/media/store', 'admin\MediaController@store');
Route::get('/admin/media/delete/{id}', 'admin\MediaController@destroy');
Route::get('media/pagination', 'admin\MediaController@pagination');
Route::get('media/pagination/fetch_data', 'admin\MediaController@pagination');

/****=============== courier section    =====================  ******/
Route::get('admin/couriers', 'admin\CourierController@index');
 Route::get('admin/courier/create', 'admin\CourierController@create');
Route::post('admin/courier/store', 'admin\CourierController@store');
Route::post('admin/courier/update/{id}', 'admin\CourierController@update');
Route::get('admin/courier/{id}', 'admin\CourierController@edit');
Route::get('/admin/courier/delete/{id}', 'admin\CourierController@delete');


/****=============== media section    =====================  ******/
Route::get('admin/sliders', 'admin\SliderController@index');
Route::get('admin/slider/create', 'admin\SliderController@create');
Route::post('admin/slider/store', 'admin\SliderController@store');
Route::post('admin/slider/update/{id}', 'admin\SliderController@update');
Route::get('admin/slider/{id}', 'admin\SliderController@edit');
Route::get('/admin/slider/delete/{id}', 'admin\SliderController@destroy');




/****=============== customer font section    =====================  ******/

Route::get('customer/login', 'CustomerController@login');
Route::get('customer/form', 'CustomerController@sign_up_form');
Route::post('customer/form', 'CustomerController@store');
Route::get('/myaccount', 'CustomerController@myaccount');
Route::get('/customer/password/changed', 'CustomerController@password_changed');
Route::post('/customer/password/changed', 'CustomerController@password_changed_store');
Route::get('/customer/logout', 'CustomerController@logout');
Route::post('/myprofile_save', 'CustomerController@myprofile_save');
 
Route::get('/customer/photo/changed', 'CustomerController@photo_changed');
Route::post('/customer/photo/changed', 'CustomerController@photo_changed_store');


Route::get('customer/logout', 'CustomerController@logout');
Route::post('customer/login', 'CustomerController@login_check');
Route::get('customer/five_minite_check', 'CustomerController@five_minite_check');
Route::get('customer/one_hour_check', 'CustomerController@one_hour_check');




Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return redirect('dashboard');
});


