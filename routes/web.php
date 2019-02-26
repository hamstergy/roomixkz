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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/users','AdminUsersController');
Route::get('/admin', function(){
    return view('admin.index');
}
    );
Route::get('catalog/', ['uses' => 'CatalogController@index', 'as' => 'catalog']);
Route::get('service/', ['uses' => 'ServiceController@index', 'as' => 'service']);
Route::get('specservice/', ['uses' => 'SpecServiceController@index', 'as' => 'specservice']);

Route::get('catalog/{sparepart}/', ['uses' => 'CatalogController@getCarbrands', 'as' => 'catalog.carbrand']);
Route::post('catalog/{sparepart}/', ['uses' => 'CatalogController@getCarbrands', 'as' => 'catalog.carbrand']);
Route::get('catalog/{sparepart}/{carbrand}', ['uses' => 'CatalogController@getCarmodels', 'as' => 'catalog.carmodel']);
Route::get('catalog/{sparepart}/{carbrand}/{carmodel}', ['uses' => 'CatalogController@request', 'as' => 'catalog.request']);
Route::post('catalog/{sparepart}/{carbrand}', ['uses' => 'CatalogController@getCarmodels', 'as' => 'catalog.carmodel']);

Route::get('spec/', ['uses' => 'SpecController@index', 'as' => 'spec']);
Route::get('spec/{spectype}/', ['uses' => 'SpecController@getSpecspareparts', 'as' => 'spec.specsparepart']);
Route::post('spec/{spectype}/', ['uses' => 'SpecController@getSpecspareparts', 'as' => 'spec.specsparepart']);
Route::get('spec/{spectype}/{specsparepart}', ['uses' => 'SpecController@getSpecbrands', 'as' => 'spec.specbrand']);
Route::post('spec/{spectype}/{specsparepart}', ['uses' => 'SpecController@getSpecbrands', 'as' => 'spec.specbrand']);
Route::get('spec/{spectype}/{specsparepart}/{specbrand}', ['uses' => 'SpecController@getSpecmodels', 'as' => 'spec.specmodel']);
Route::post('spec/{spectype}/{specsparepart}/{specbrand}', ['uses' => 'SpecController@getSpecmodels', 'as' => 'spec.specmodel']);

Route::get('spectyres/', ['uses' => 'SpecTyresController@index', 'as' => 'spectyres']);
Route::get('spectyres/{spectype}/', ['uses' => 'SpecTyresController@getSpectyres', 'as' => 'spectyres.tyres']);
Route::post('spectyres/{spectype}/', ['uses' => 'SpecTyresController@getSpectyres', 'as' => 'spectyres.tyres']);


Route::post('request','RequestController@getRequestForm');
Route::post('requestspec','RequestController@getRequestFormSpec');
Route::post('requestspectyres','RequestController@getRequestFormSpecTyres');
Route::post('requestspecservice','RequestController@getRequestFormSpecService');
Route::get('request', 'RequestController@getRequestForm');
Route::get('requestspec', 'RequestController@getRequestFormSpec');
Route::get('requestspectyres', 'RequestController@getRequestFormSpecTyres');
Route::get('requestspecservice', 'RequestController@getRequestFormSpecService');
Route::get('mail/',function (){
    $data = [
        'title' => "test message",
        'content' => 'hello my world'
    ];
    Mail::send('emails.test2', $data, function ($message){
       $message->to('info@elen.kz','Hamster')->subject('Hello world hello!');
       echo 'Send';
    });
});