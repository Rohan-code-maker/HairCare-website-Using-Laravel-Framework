<?php

use App\Http\Controllers\HairContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes {{url('/')}}/hair
|--------------------------------------------------------------------------
|Route::get('/hair',[HairContoller::class,'index']);
Route::post('/hair',[HairContoller::class,'register']);
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[HairContoller::class,'index']);
Route::post('/index',[HairContoller::class,'register']);

Route::get('/contact',[HairContoller::class,'index']);
Route::post('/contact',[HairContoller::class,'register']);

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/menPrice', function () {
    return view('menPrice');
});

Route::get('/womenPrice', function () {
    return view('womenPrice');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/customer/create',[HairContoller::class,'create']);

Route::get('/customer/view',[HairContoller::class,'view']);

Route::get('/customer/delete/{id}',[HairContoller::class,'delete']);

Route::get('/customer/edit/{id}',[HairContoller::class,'edit']);

Route::post('/customer/update/{id}',[HairContoller::class,'update']);
