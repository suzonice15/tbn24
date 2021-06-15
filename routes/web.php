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
Route::get('/meet-our-team', 'HomeController@team');
Route::get('/privacy-policy', 'HomeController@page');

Route::get('/ajax_team/{department_id}', 'HomeController@ajax_team');
Route::get('/member-details/{memberId}', 'HomeController@memberDetail');
Route::get('/carrier', 'HomeController@carrier');
Route::get('/apply-now', 'HomeController@applyNow');
Route::get('/apply-now-2', 'HomeController@applyNowForm2');
Route::get('/apply-now-3', 'HomeController@applyNowForm3');
Route::get('/apply-success', 'HomeController@applySuccess');
Route::get('/chat/{id}', 'HomeController@getChat');
Route::get('/chatStore/{message}', 'HomeController@storeChat');

Route::get('/all-program', 'HomeController@all_program');
Route::get('/blog', 'HomeController@blog');
Route::get('/election', 'HomeController@election');
Route::get('ajax_program', 'HomeController@ajax_program');
Route::get('/program-details/{id}', 'HomeController@single_program');
Route::get('/about-us', 'HomeController@about');
Route::get('/documents', 'HomeController@documents');
Route::get('/document-details/{id}', 'HomeController@document_details');
Route::get('/contact', 'HomeController@contact');
Route::get('/home_page_program', 'HomeController@home_page_program');
Route::get('/ajax-footer-load', 'HomeController@ajaxFooterLoad');
Route::get('/ajax-post-category-call', 'HomeController@ajax_post_category_call');
Route::get('/about_us', 'HomeController@about_us');
Route::get('/today-schedule-ajax-data', 'HomeController@todayScheduleAjaxData');
Route::get('/sohoj-admin-login', 'HomeController@admin_login');
Route::post('/modal/login', 'HomeController@modal_login');
Route::post('/contact', 'HomeController@contact_store');
Route::get('/category/{name}', 'HomeController@category');
Route::get('/post/{name}', 'HomeController@post');
Route::get('/today-schedule', 'HomeController@today_schedule');
Route::get('/program-video', 'HomeController@programVideo');
Route::get('/ajax-program-video', 'HomeController@ajax_program_video');
Route::get('/youtube-playlist/{any}', 'HomeController@youtubePlaylist');
Route::post('/vote/count', 'HomeController@vote_count');
Route::get('/ajax_pull_data_get', 'HomeController@ajax_pull_data_get');
Route::get('/all_comment_count/{id}', 'HomeController@all_comment_count');
Route::get('/all_like_count/{id}', 'HomeController@all_like_count');
Route::get('/all_like_submit/{id}', 'HomeController@all_like_submit');
Route::get('/track_website_user', 'HomeController@hitcounter');
Route::post('/submit/comments', 'HomeController@submit_comments');
Route::post('/submit/sub_comments', 'HomeController@submit_sub_comments');
Route::post('/login/check_ajax', 'HomeController@login_check_ajax');
Route::post('/get/comments', 'HomeController@get_comments');
Route::post('/get/sub_comments_data', 'HomeController@sub_comments_data');
Route::get('/get-single-playlist-by-program-id/{id}', 'HomeController@get_single_playlist_by_program_id');



/****=============== admin chat section    =====================  ******/
Route::get('admin/chat', 'admin\ChatController@chat');
Route::get('ajax/chat/users', 'admin\ChatController@ajaxChatUsers');

Route::get('admin/message/{id}', 'admin\ChatController@getMessage')->name('message');
Route::post('message', 'admin\ChatController@sendMessage');

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



/****=============== admin post section    =====================  ******/
Route::get('admin/post', 'admin\PostController@index');
Route::get('admin/post/create', 'admin\PostController@create');
Route::post('admin/post/store', 'admin\PostController@store');
Route::post('admin/post/update/{id}', 'admin\PostController@update');
Route::get('admin/post/{id}', 'admin\PostController@edit');
Route::get('/admin/post/delete/{id}', 'admin\PostController@delete');
Route::get('admin/post_pagination', 'admin\PostController@fetch_data');
Route::post('post-urlcheck', 'admin\PostController@urlCheck')->name('post.urlcheck');


/****=============== admin departments section    =====================  ******/
Route::get('admin/departments', 'admin\DepartmentController@index');
Route::get('admin/departments/create', 'admin\DepartmentController@create');
Route::post('admin/departments/store', 'admin\DepartmentController@store');
Route::post('admin/departments/update/{id}', 'admin\DepartmentController@update');
Route::get('admin/departments/{id}', 'admin\DepartmentController@edit');
Route::get('/admin/departments/delete/{id}', 'admin\DepartmentController@delete');

Route::post('member-urlcheck', 'admin\MemberController@urlCheck')->name('member.urlcheck');

/****=============== admin members section    =====================  ******/
Route::get('admin/members', 'admin\MemberController@index');
Route::get('admin/members/create', 'admin\MemberController@create');
Route::post('admin/members/store', 'admin\MemberController@store');
Route::post('admin/members/update/{id}', 'admin\MemberController@update');
Route::get('admin/members/{id}', 'admin\MemberController@edit');
Route::get('/admin/members/delete/{id}', 'admin\MemberController@delete');
Route::get('admin/member_pagination', 'admin\MemberController@fetch_data');


/****=============== admin add  question     =====================  ******/
Route::get('admin/question', 'admin\QuestionController@index');
Route::get('admin/question/create', 'admin\QuestionController@create');
Route::post('admin/question/store', 'admin\QuestionController@store');
Route::post('admin/question/update/{id}', 'admin\QuestionController@update');
Route::get('admin/question/{id}', 'admin\QuestionController@edit');
Route::get('/admin/question/delete/{id}', 'admin\QuestionController@delete');
Route::get('admin/question_pagination', 'admin\QuestionController@fetch_data');
Route::get('admin/exams', 'admin\QuestionController@exams');
Route::get('admin/exam_pagination', 'admin\QuestionController@exam_pagination');
Route::get('/admin/exam/delete/{id}', 'admin\QuestionController@examDelete');
Route::get('admin/exam/{id}', 'admin\QuestionController@examEdit');

 







/****=============== admin document section    =====================  ******/
Route::get('admin/document', 'admin\DocumentController@index');
Route::get('admin/document/create', 'admin\DocumentController@create');
Route::post('admin/document/store', 'admin\DocumentController@store');
Route::post('admin/document/update/{id}', 'admin\DocumentController@update');
Route::get('admin/document/{id}', 'admin\DocumentController@edit');
Route::get('/admin/document/delete/{id}', 'admin\DocumentController@delete');
Route::get('admin/document_pagination', 'admin\DocumentController@fetch_data');
Route::post('document-urlcheck', 'admin\DocumentController@urlCheck')->name('document.urlcheck');



/****=============== admin Popular Video Pull section    =====================  ******/
Route::get('/admin/popular/video', 'admin\PopularVideoController@index');
Route::get('/admin/popular/video/create', 'admin\PopularVideoController@create');
Route::post('/admin/popular/video/store', 'admin\PopularVideoController@store');
Route::post('/admin/popular/video/{id}', 'admin\PopularVideoController@update');
Route::get('/admin/popular/video/{id}', 'admin\PopularVideoController@edit');
Route::get('/admin/popular/video/delete/{id}', 'admin\PopularVideoController@delete');
Route::get('admin/popular_video/pagination', 'admin\PopularVideoController@pagination');



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
Route::get('schedules/schedule_fetch_data_or_insert_data', 'admin\ScheduleController@schedule_fetch_data_or_insert_data');





/****=============== admin weekly schedules section    =====================  ******/
Route::get('admin/schedule-weekly', 'admin\ScheduleController@schedule_weekly');
Route::get('/admin/schedule-weekly/delete/{id}', 'admin\ScheduleController@schedule_weekly_delete');
Route::post('admin/schedule-weekly/store', 'admin\ScheduleController@schedule_weekly_store');
Route::get('admin/schedule-weekly/create', 'admin\ScheduleController@schedule_weekly_create');
Route::post('admin/schedule-weekly/update/{id}', 'admin\ScheduleController@schedule_weekly_update');
Route::get('admin/schedule-weekly/{id}', 'admin\ScheduleController@schedule_weekly_edit');
Route::get('/admin/schedules/delete/{id}', 'admin\ScheduleController@delete');
Route::get('schedules/pagination', 'admin\ScheduleController@pagination');
Route::get('schedules/fetch_data_using_week', 'admin\ScheduleController@fetch_data_using_week');
Route::get('schedules/fetch_data_using_program_week', 'admin\ScheduleController@fetch_data_using_program_week');




/****=============== admin weekly schedules section    =====================  ******/
Route::get('schedules/schedule-weekly-day-view', 'admin\ScheduleController@schedule_weekly_day_view');
Route::get('weakly_data_delete/{id}', 'admin\ScheduleController@weakly_data_delete');
Route::get('admin/schedules/weekly_day_view_edit/{id}', 'admin\ScheduleController@weekly_day_view_edit');
Route::post('admin/schedules/weekly_view_update/{id}', 'admin\ScheduleController@weekly_day_view_update');




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



/****=============== playlist section    =====================  ******/
Route::get('admin/playlist', 'admin\PlaylistController@index');
Route::get('admin/playlist/create', 'admin\PlaylistController@create');
Route::post('admin/playlist/store', 'admin\PlaylistController@store');
Route::post('admin/playlist/update/{id}', 'admin\PlaylistController@update');
Route::get('admin/playlist/{id}', 'admin\PlaylistController@edit');
Route::get('/admin/playlist/delete/{id}', 'admin\PlaylistController@delete');
Route::get('playlist/pagination/fetch_data', 'admin\PlaylistController@fetch_data');




/****=============== Comments section    =====================  ******/
Route::get('admin/comment', 'admin\CommentController@index');
Route::get('admin/comment/create', 'admin\CommentController@create');
 Route::post('admin/comment/update/{id}', 'admin\CommentController@update');
Route::get('admin/comment/{id}', 'admin\CommentController@edit');
Route::post('/admin/comment/delete', 'admin\CommentController@delete');
Route::get('comment/pagination/fetch_data', 'admin\CommentController@fetch_data');





/****===============replay Comments section    =====================  ******/
Route::get('admin/replay/comment', 'admin\ReplayCommentController@index');
Route::get('admin/replay/comment/create', 'admin\ReplayCommentController@create');
 Route::post('admin/replay/comment/update/{id}', 'admin\ReplayCommentController@update');
Route::get('admin/replay/comment/{id}', 'admin\ReplayCommentController@edit');
Route::post('/admin/replay/comment/delete', 'admin\ReplayCommentController@delete');
Route::get('replay/comment/pagination/fetch_data', 'admin\ReplayCommentController@fetch_data');


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
Route::post('customer/form1', 'CustomerController@form1');
Route::post('customer/form2', 'CustomerController@form2');
Route::post('customer/form3', 'CustomerController@form3');
Route::get('exam-start', 'CustomerController@examStart');
Route::post('examStore', 'CustomerController@examStore');
Route::get('exam-success', 'CustomerController@examSuccess');







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
     $exitCode = Artisan::call('view:clear');
     return redirect('dashboard');
});


