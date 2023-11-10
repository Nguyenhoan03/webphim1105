<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/crawlphimhanhdong', 'App\Http\Controllers\crawl\phimhanhdongcontroller@crawlphimhanhdong');


Route::get('/dulieuadmin', 'App\Http\Controllers\detailfilmcontroller@dulieuadmin');
Route::put('/editproduct/{id}','App\Http\Controllers\productcontroller@update');
Route::put('/editdetailfilm/{id}','App\Http\Controllers\detailfilmcontroller@update');
Route::put('/editxemphim/{id}','App\Http\Controllers\xemphimcontroller@update');

Route::delete('/xoaproduct/{id}','App\Http\Controllers\productcontroller@destroy');

Route::delete('/xoadetailfilm/{id}','App\Http\Controllers\detailfilmcontroller@destroy');
Route::delete('/xoaxemphim/{id}','App\Http\Controllers\xemphimcontroller@destroy');
 

Route::get('/categoryall','App\Http\Controllers\categorycontroller@index');
Route::get('/thongtinfilm','App\Http\Controllers\detailfilmcontroller@index');
Route::get('/xemphim','App\Http\Controllers\xemphimcontroller@index');


Route::get('/hoan','App\Http\Controllers\productcontroller@index');
Route::get('/phimmoicapnhat','App\Http\Controllers\productcontroller@phimmoicapnhat');
Route::get('/phimbomoi','App\Http\Controllers\productcontroller@phimbomoi');
Route::get('/phimnetflix','App\Http\Controllers\productcontroller@phimnetflix');
Route::get('/phimchieurap','App\Http\Controllers\productcontroller@phimchieurap');
Route::get('/phimkinhdi','App\Http\Controllers\productcontroller@phimkinhdi');
Route::get('/phimvientuong','App\Http\Controllers\productcontroller@phimvientuong');
Route::get('/phimhoathinh','App\Http\Controllers\productcontroller@phimhoathinh');
Route::get('/phimtinhcamlangman','App\Http\Controllers\productcontroller@phimtinhcamlangman');



Route::get('/theloaiphimhanhdong','App\Http\Controllers\productcontroller@theloaiphimhanhdong');
Route::get('/theloaiphimtinhcamlangman','App\Http\Controllers\productcontroller@theloaiphimtinhcamlangman');

Route::get('/theloaiphimchientranh','App\Http\Controllers\productcontroller@theloaiphimchientranh');
Route::get('/theloaiphimphieuluu','App\Http\Controllers\productcontroller@theloaiphimphieuluu');
Route::get('/theloaiphimhaihuoc','App\Http\Controllers\productcontroller@theloaiphimhaihuoc');
Route::get('/theloaiphimvientuong','App\Http\Controllers\productcontroller@theloaiphimvientuong');
Route::get('/theloaiphimcotrang','App\Http\Controllers\productcontroller@theloaiphimcotrang');
Route::get('/theloaiphimhoathinh','App\Http\Controllers\productcontroller@theloaiphimhoathinh');


Route::get('/theloaiphimkinhdi','App\Http\Controllers\productcontroller@theloaiphimkinhdi');
Route::get('/theloaiphimhinhsu','App\Http\Controllers\productcontroller@theloaiphimhinhsu');
Route::get('/theloaiphimhoihopgaycan','App\Http\Controllers\productcontroller@theloaiphimhoihopgaycan');

Route::get('/theloaiphimtamly','App\Http\Controllers\productcontroller@theloaiphimtamly');
Route::get('/theloaiphimle','App\Http\Controllers\productcontroller@theloaiphimle');
Route::get('/theloaiphimchieurap','App\Http\Controllers\productcontroller@theloaiphimchieurap');

Route::get('/theloaiphimnetflix','App\Http\Controllers\productcontroller@theloaiphimnetflix');
Route::get('/theloaiphimbomy','App\Http\Controllers\productcontroller@theloaiphimbomy');
Route::get('/theloaiphimbohanquoc','App\Http\Controllers\productcontroller@theloaiphimbohanquoc');
Route::get('/theloaiphimbotrungquoc','App\Http\Controllers\productcontroller@theloaiphimbotrungquoc');
Route::get('/theloaiphimvietnam','App\Http\Controllers\productcontroller@theloaiphimvietnam');


Route::get('/{slug}','App\Http\Controllers\detailfilmcontroller@detailfilm');


Route::get('/imagedetail/{slug}','App\Http\Controllers\productcontroller@imagedetail');
Route::get('/gettapfilm/{slug}','App\Http\Controllers\xemphimcontroller@gettapfilm');
Route::get('/getxemphim/{slug}/{episode}','App\Http\Controllers\xemphimcontroller@getxemphim');
Route::post('/createproductfilm','App\Http\Controllers\productcontroller@create');
Route::post('/createdetailfilm','App\Http\Controllers\detailfilmcontroller@create');
Route::post('/createthongtinphim','App\Http\Controllers\xemphimcontroller@create');
Route::post('/loginadmin','App\Http\Controllers\loginadmincontroller@login');
Route::get('/tim_kiem/{slug}','App\Http\Controllers\productcontroller@search');








Route::get('/crawl-data', 'App\Http\Controllers\CrawlDataController@crawl');


