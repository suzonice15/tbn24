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



/* program section */


 
/****=============== admin page section    =====================  ******/
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





Route::get('/', 'HomeController@index');
Route::get('/all-program', 'HomeController@all_program');
Route::get('ajax_program', 'HomeController@ajax_program');
Route::get('/program-details/{id}', 'HomeController@single_program');
Route::get('/about-us', 'HomeController@about');
Route::get('/documents', 'HomeController@documents');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contact_store');
Route::get('/today-schedule', 'HomeController@today_schedule');




Route::get('/product/{id}', 'HomeController@product');
Route::get('/search_engine', 'HomeController@search_engine');
Route::get('/search', 'HomeController@search');
Route::get('/hot_home_product', 'HomeController@hot_home_product');
Route::get('/home_page_category_ajax', 'HomeController@home_page_category_ajax');
Route::get('/add-to-cart', 'AjaxController@add_to_cart');
Route::get('/related/product', 'AjaxController@relatedProduct');
Route::get('/hotdeal/product', 'AjaxController@hotdealProduct');
Route::get('track-your-order', 'HomeController@track_order');
Route::post('track-your-order', 'HomeController@track_order');
Route::get('/page/{id}', 'HomeController@page');
Route::post('/add_to_review', 'AjaxController@add_to_review');
Route::get('homePage/pagination', 'HomeController@homepagination');
Route::get('live/product/search', 'HomeController@liveProductSearch');






/*            cart           */
Route::get('/thank-you', 'CheckOutController@thankYou');
Route::get('/cart', 'CheckOutController@cart');
Route::get('/plus_cart_item', 'CheckOutController@plus_cart_item');
Route::get('/minus_cart_item', 'CheckOutController@minus_cart_item');
Route::get('/remove_cart_item', 'CheckOutController@remove_cart_item');
Route::get('/add-to-wishlist', 'CheckOutController@add_to_wishlist');
Route::get('/wishlist', 'CheckOutController@wishlist');
Route::get('/remove-to-wishlist', 'CheckOutController@remove_wish_list');
Route::get('/checkout', 'CheckOutController@checkout');
Route::post('/chechout', 'CheckOutController@checkoutStore');

Route::get('/admin', 'admin\AdminController@login');
Route::post('/login_check', 'admin\AdminController@loginCheck');
Route::get('/dashboard', 'admin\DashboardController@index');


/****=============== admin section    =====================  ******/

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


/****=============== category section    =====================  ******/
Route::get('admin/categories', 'admin\CategoryController@index');
Route::post('category-urlcheck', 'admin\CategoryController@urlCheck');
Route::get('admin/category/create', 'admin\CategoryController@create');
Route::post('admin/category/store', 'admin\CategoryController@store');
Route::post('admin/category/update/{id}', 'admin\CategoryController@update');
Route::get('admin/category/{id}', 'admin\CategoryController@edit');
Route::get('/admin/category/delete/{id}', 'admin\CategoryController@delete');
Route::get('category/pagination/fetch_data', 'admin\CategoryController@fetch_data');


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

/****=============== admin vendor  section   =====================  ******/
Route::get('admin/vendors', 'admin\AdminVendorController@index');
Route::get('/admin/vendor/view/{id}', 'admin\AdminVendorController@show');
Route::get('admin/vendor/pending/products', 'admin\AdminVendorController@pending');
Route::get('admin/vendor/published/products', 'admin\AdminVendorController@published_product');
Route::get('admin/vendor/pending/products/pagination', 'admin\AdminVendorController@pending_pagination');
Route::get('admin/vendor/published/products/pagination', 'admin\AdminVendorController@published_pagination');
Route::get('admin/vendor/product/published/{id}', 'admin\AdminVendorController@published');
Route::get('admin/vendor/product/unpublished/{id}', 'admin\AdminVendorController@unpublished');
Route::get('/admin/vendor/delete/{id}', 'admin\AdminVendorController@delete');
Route::get('/admin/vendor/active/{id}', 'admin\AdminVendorController@active');
Route::get('/admin/vendor/inactive/{id}', 'admin\AdminVendorController@inactive');

/****=============== vendor font section    =====================  ******/
Route::get('/shop/{id}', 'VendorController@shop');
Route::get('/vendor-shop-ajax-product', 'VendorController@vedor_shop_ajax');
Route::get('vendor/form', 'VendorController@sign_up_form');
Route::post('vendor/save', 'VendorController@store');
Route::get('vendor/login', 'VendorController@login');
Route::get('vendor/logout', 'VendorController@logout');
Route::post('vendor/login', 'VendorController@login_check');
Route::post('vendor-shop-urlcheck', 'VendorController@shopUrlCheck')->name('vendor.Shopurlcheck');



/****=============== customer font section    =====================  ******/

Route::get('customer/login', 'CustomerController@login');
Route::get('customer/form', 'CustomerController@sign_up_form');
Route::get('customer/logout', 'CustomerController@logout');
Route::post('customer/login', 'CustomerController@login_check');


/****=============== vendor admin section    =====================  ******/
Route::get('vendor/product/create', 'VendorController@create');
Route::post('vendor/product/product_store', 'VendorController@product_store');
Route::get('/vendor/products', 'VendorController@index');
Route::get('vendor/products/pagination', 'VendorController@pagination');
Route::get('vendor/product/delete/{id}', 'VendorController@delete_product');
Route::get('vendor/product/{id}', 'VendorController@edit');
Route::post('/vendor/product/update/{id}', 'VendorController@update');
Route::get('vendor/orders', 'VendorController@all_orders');



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return redirect('dashboard');
});


