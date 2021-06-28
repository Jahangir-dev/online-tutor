<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

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
    return redirect()->route('welcome');
});



Route::get('welcome', 'AdminController@welcome')->name('welcome');

Route::get('login', 'Auth\LoginController@login')->name('login');

Route::post('login-post', 'Auth\LoginController@postlogin')->name('login-post');


Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\LoginController@register')->name('register');

Route::post('register-save', 'Auth\LoginController@register_save')->name('register-save');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('teacher-info', 'TeacherController@teacher_information')->name('teacher-info');
Route::post('teacher-save-info', 'TeacherController@teacher_information_save')->name('teacher-save-info');

Route::get('teacher-details/{id}', 'TeacherController@teacher_details')->name('teacher-details');


Route::post('teacher-document-save', 'TeacherController@teacher_document_save')->name('teacher-document-save');

Route::get('teacher-subjects/{id}', 'TeacherController@teacher_subject')->name('teacher-subjects');

Route::post('teacher-subject-save', 'TeacherController@teacher_subject_save')->name('teacher-subject-save');
Route::get('more-categories', 'AdminController@more_categories')->name('more-categories');


Route::get('admin-home', 'AdminController@home')->name('admin-home')->middleware('can:admin');


Route::get('subject-list', 'AdminController@subject_list')->name('subject-list')->middleware('can:admin');


Route::post('add-subject', 'AdminController@add_subject')->name('add-subject')->middleware('can:admin');




Route::post('edit-subject', 'AdminController@edit_subject')->name('edit-subject')->middleware('can:admin');

Route::get('subject-delete/{id}', 'AdminController@subject_delete')->name('subject-delete')->middleware('can:admin');



Route::get('categories-list', 'AdminController@categories_list')->name('categories-list')->middleware('can:admin');


Route::post('add-categories', 'AdminController@add_categories')->name('add-categories')->middleware('can:admin');

Route::post('edit-categories', 'AdminController@edit_categories')->name('edit-categories')->middleware('can:admin');


Route::get('categoriess-delete/{id}', 'AdminController@categories_delete')->name('categoriess-delete')->middleware('can:admin');

Route::get('student-home', 'StudentController@home')->name('student-home')->middleware('can:student');


Route::get('tutor-gigs', 'TeacherController@tutor_gigs')->name('tutor-gigs')->middleware('can:tutor');



Route::get('create-gigs', 'TeacherController@create_gigs')->name('create-gigs')->middleware('can:tutor');


Route::post('gigs-save', 'TeacherController@gigs_save')->name('gigs-save')->middleware('can:tutor');

Route::get('gigs-details/{uid}', 'TeacherController@gigs_details')->name('gigs-details')->middleware('can:tutor');

Route::get('student-gigs-details/{uid}', 'Student\StudentOrdesController@gigs_details')->name('student-gigs-details')->middleware('can:student');

Route::post('gig-update', 'TeacherController@gig_update')->name('gig-update')->middleware('can:tutor');

Route::get('/messages', 'ChatController@index')->name('messages');

Route::get('/load-latest-messages', 'ChatController@getLoadLatestMessages');

Route::post('/send', 'ChatController@postSendMessage');

Route::get('/fetch-old-messages', 'ChatController@getOldMessages');

Route::post('/send-image', 'ChatController@send_image')->name('send-image');

Route::post('/send-offer', 'SentOfferController@send_offer')->name('send-offer');

Route::get('/get-gig-detail', 'TeacherController@getGigdetail')->name('get-gig-detail');;

Route::get('/confirm-offer', 'SentOfferController@confirmOffer')->name('confirm-offer');;

Route::get('create_new_quick_reply', 'UserQuickRepliesController@create_new_quick_reply')->name('create_new_quick_reply')->middleware('can:tutor');

Route::get('/send-notification', 'NotificationController@sendOfferNotification')->name('send-notification');

Route::get('/tutor-orders', 'Tutor\TutorOrdesController@tutorOrders')->name('tutor-orders')->middleware('can:tutor');

Route::get('/student-orders', 'Student\StudentOrdesController@studentOrders')->name('student-orders')->middleware('can:student');

Route::get('/student-order-status/{id}/{status}', 'Student\StudentOrdesController@studentOrderStatus')->name('student-order-status')->middleware('can:student');

Route::get('order-list', 'SentOfferController@adminOrdersList')->name('order-list')->middleware('can:admin');;

Route::get('admin/delete/order/{id}/{status}', 'SentOfferController@adminDeleteOrder')->name('adminDeleteOrder')->middleware('can:admin');

Route::get('adminOrderChat/{id}/{status}', 'SentOfferController@adminOrderChat')->name('adminOrderChat')->middleware('can:admin');


Route::get('teacher-list', 'TeacherController@teacher_list')->name('teacher-list')->middleware('can:admin');



Route::get('expert-qa', 'StudentController@expert_qa')->name('expert-qa');

Route::post('question-save', 'StudentController@question_save')->name('question-save');


Route::get('question-list', 'AdminController@question_list')->name('question-list')->middleware('can:admin');



Route::get('online-tutor', 'HomeController@online_tutor')->name('online-tutor');



Route::get('increase-level/{id}', 'AdminController@increase_level')->name('increase-level')->middleware('can:admin');



Route::post('level-update', 'AdminController@level_update')->name('level-update')->middleware('can:admin');

Route::get('tutors-dashboard', 'TeacherController@tuor_dashboard')->name('tutors-dashboard')->middleware('can:tutor');




Route::get('students-dashboard', 'StudentController@students_dashboard')->name('students-dashboard')->middleware('can:student');




Route::get('accept-offer/{id}', 'StudentController@accept_offer')->name('accept-offer')->middleware('can:student');



Route::get('accept-save/{id}/{type}', 'StudentController@accept_save')->name('accept-save')->middleware('can:student');


Route::get('tutor-earning', 'TeacherController@tutor_earning')->name('tutor-earning')->middleware('can:tutor');

Route::get('tutor-classes', 'TeacherController@tutor_classes')->name('tutor-classes')->middleware('can:tutor');







Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));


Route::get('teacher-gigs-detail/{id}','TeacherController@teacher_gigs_detail')->name('teacher-gigs-detail');

Route::get('user-gigs-details/{id}','TeacherController@user_gigs_details')->name('user-gigs-details');


Route::get('instrument-gig-view/{id}','TeacherController@instrument_gig_view')->name('instrument-gig-view');


Route::get('language-gigs-view/{id}','TeacherController@language_gigs_view')->name('language-gigs-view');

Route::get('school-gigs-view/{id}','TeacherController@school_gigs_view')->name('school-gigs-view');



Route::get('new-teacher-view/{id}','TeacherController@new_teacher_view')->name('new-teacher-view');



Route::get('pro-teacher-gig/{id}','TeacherController@pro_teacher_gig')->name('pro-teacher-gig');

Route::get('teacher-home-gigs/{id}','TeacherController@teacher_home_gigs')->name('teacher-home-gigs');




Route::get('new-teacher-views/{id}','TeacherController@new_teacher_views')->name('new-teacher-views');


Route::post('contact-us-save','HomeController@contact_us_save')->name('contact-us-save');


Route::get('contact-us','HomeController@contact_us_list')->name('contact-us')->middleware('can:admin');


Route::get('contact-delete/{id}','HomeController@contact_delete')->name('contact-delete')->middleware('can:admin');



