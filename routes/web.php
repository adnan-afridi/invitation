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
    return redirect('admin');
});
Route::get('campaign/{id?}', 'AdminCampaignController@show_campaign');
Route::get('publish_campaign/{id?}', 'AdminCampaignPublishController@publish');
Route::get('testemail', 'EmailController@sendEmail');
