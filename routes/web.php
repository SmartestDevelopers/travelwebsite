<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'FrontController@index');

Route::get('/login', 'FrontController@login');
Route::post('/my_login', 'FrontController@myLogin');

Route::get('/signup', 'FrontController@signup');

Route::get('/become-local-expert', 'FrontController@becomeLocalExpert');

Route::post('/local-expert/register', 'FrontController@registerLocalExpert');


Route::get('/tour-list', 'FrontController@tourList');
Route::get('/booking', 'FrontController@tourBooking');
Route::get('/contact-us', 'FrontController@contactUs');
Route::get('/terms-and-conditions', 'FrontController@termsAndConditions');
Route::get('/privacy-policy', 'FrontController@privacyPolicy');

Route::post('/insert-contact-record', 'FrontController@insertContactRecord');

//Route::post('/insert-contact-record-from-local-expert', 'FrontController@insertContactRecordFromLocalExpert');



Route::post('/register', 'FrontController@register');

Route::resource('gallery', 'GalleryController');
Route::resource('services', 'ServicesController');
Route::resource('about', 'AboutController');
Route::resource('faq', 'FAQController');
Route::resource('packages', 'PackageController');
Route::resource('hotels', 'HotelController');
Route::resource('car-rentals', 'CarRentalController');

Route::post('/signup-data-insert', 'FrontController@signupDataInsert');

// Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');

//Route::get('/contactList', [AdminController::class, 'index']);

Route::get('/admin-contact-list', 'AdminController@contactList');
Route::get('/admin-booking-list', 'AdminController@bookingList');
Route::get('/admin-local-list', 'AdminController@localList');
Route::get('/admin-faq-list', 'AdminController@faqList');
Route::get('/admin-blog-list', 'AdminController@blogList');
Route::get('/admin-subscription-list',  'AdminController@adminSubscriptionList');
Route::get('/admin-submit-tour-list',  'AdminController@adminSubmitTourList');

Route::get('/faq', 'FAQController@showFAQ');
Route::get('/about', 'AboutController@showAbout');
Route::get('/services', 'ServicesController@showServices');
Route::get('/gallery', 'GalleryController@showGallery');
Route::get('/blog', 'BlogController@showBlog');

Route::post('/local-expert/faq', 'BecomeLocalExpertController@storeFAQ');
Route::post('/store-blog', 'BlogController@storeBlog');
Route::post('/submit-tour-list', 'FrontController@submitTourList');
Route::post('/subscribe', 'FrontController@subscriptionList');
Route::post('/insert-booking-record', 'FrontController@insertBookingRecord');

Route::get('/tour/buddhist-tour', 'TourDetailsController@tourBuddhistDetails');
Route::get('/tour/sikh-nature-tour', 'TourDetailsController@sikhNatureTour');
Route::get('/tour/sikh-site-tour', 'TourDetailsController@sikhSiteTour');
Route::get('/tour/sikh-religious-tour', 'TourDetailsController@sikhReligiousTour');
Route::get('/tour/skardu-tour', 'TourDetailsController@skarduTour');
Route::get('/tour/skardu-waterfall-tour', 'TourDetailsController@skarduWaterfallTour');
Route::get('/tour/hunza-tour', 'TourDetailsController@hunzaValley');




Route::get('/blog/buddhist-blog', 'BlogController@buddhistBlog');
Route::get('/blog/honeymoon-blog', 'BlogController@honeymoonBlog');
Route::get('/blog/skardu-blog', 'BlogController@skarduBlog');
Route::get('/blog/sikh-sites-blog', 'BlogController@sikhSitesBlog');
Route::get('/blog/sikh-gurdwara-blog', 'BlogController@sikhGurdwaraBlog');
Route::get('/blog/hunza-blog', 'BlogController@hunzaBlog');


Route::get('/team/{locale}', 'HomeController@team');




