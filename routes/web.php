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

// Language Route
//...
// .. End of Language Route


//Frontend routes

Route::get('/', 'FrontendPageController@getIndex')->name('home');
Route::get('/about', 'FrontendPageController@getAbout')->name('about');
Route::get('/services', 'FrontendPageController@getServices')->name('services');
Route::get('/quote','FrontendPageController@getQuote')->name('quote');
Route::get('/news','FrontendPageController@getNews')->name('news');
Route::get('/contact', 'FrontendPageController@getContact')->name('contact');
Route::get('/faq', 'FrontendPageController@getFaq')->name('faq');
Route::get('/careers', 'FrontendPageController@getCareers')->name('careers');
Route::get('/services/{slug}','ServiceCategoryController@serviceCategory')->name('serviceCategory');
Route::get('/services/{service_category}/{slug}', 'ServiceTypeController@serviceType')->name('serviceType');


//Temporary Route to view Service Categories. FOR DEBUGGING ONLY
//Route::get('/services/corporate', 'FrontendPageController@getServicesCorp')->name('services-corporate');
//Route::get('/services/personal', 'FrontendPageController@getServicesPers')
// ..End debug

// .. End of Frontend Routes

//Backend Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
// .. End Backend Routes


