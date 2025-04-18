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
Route::get('/tour-details', 'FrontController@tourDetails');
Route::get('/tour-booking', 'FrontController@tourBooking');
Route::get('/contact-us', 'FrontController@contactUs');

Route::post('/insert-contact-record', 'FrontController@insertContactRecord');

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

Route::get('/faq', 'FAQController@showFAQ');
Route::get('/about', 'AboutController@showAbout');
Route::get('/services', 'ServicesController@showServices');
Route::get('/gallery', 'GalleryController@showGallery');
Route::get('/blog', 'BlogController@showBlog');
