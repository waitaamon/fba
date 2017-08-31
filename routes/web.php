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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
});

Route::group(['prefix' =>'services'], function (){

    Route::get('/internal-audits-and-risk-compliance-services', function () {
        return view('services.internalAudit');
    })->name('internalAudit');

    Route::get('/accounts-and-tax-advisory-services', function () {
        return view('services.taxAdvisory');
    })->name('taxAdvisory');

    Route::get('/business-advisory', function () {
        return view('services.businessAdvisory');
    })->name('businessAdvisory');

    Route::get('/operational-excellence', function () {
        return view('services.operation');
    })->name('operational');

});


Route::get('/contact-us', 'ContactController@index')->name('contactUs');
Route::post('/contact-us', 'ContactController@sendEmail')->name('sendEmail');
