<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login',[PagesController::class,'login'])->name('login');

Route::post('/sigin',[UserController::class,'login'])->name('signin');

Route::get('/register',[PagesController::class,'register'])->name('register');

Route::post('signup',[UserController::class,'register'])->name('signup');

Route::get('/visitor',[PagesController::class,'visitor'])->name('visitor');

Route::get('/search',[GigController::class,'search'])->name('search');

Route::get('visitor/{gig_id}',[PagesController::class,'gig'])->name('visitor.information');

Route::get('/tag/{tag}',[GigController::class,'tag'])->name('tag');

Route::get('/search_tag/{tag}',[GigController::class,'search_tag'])->name('search_tag');


Route::group(['prefix'=>'listing','middleware'=>'check'],function(){

Route::get('/',[PagesController::class,'listing'])->name('listing');

Route::get('/post/{post_id}',[PagesController::class,'post'])->name('listing.gig');

Route::get('/create/gig',[PagesController::class,'create'])->name('listing.create.gig');

Route::get('/edit/{gig_id}/gig',[PagesController::class,'edit'])->name('listing.edit.gig');

Route::get('/manage/gig',[PagesController::class,'manage'])->name('listing.manage.gig');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::post('/create',[GigController::class,'create'])->name('create');

Route::get('/{gig_id}',[PagesController::class,'gig'])->name('information');

Route::delete('/delete/{gig}',[GigController::class,'delete'])->name('delete');

Route::put('/edit/{gig}',[GigController::class,'edit'])->name('edit');

});
