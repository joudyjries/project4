<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'admin'], function () {

        Route::get('getCategory/{type}', [CategoryController::class, 'getCategory'])->name('getCategory');
        Route::resource('category', CategoryController::class);
        Route::get('getContent/{category}', [ContentController::class, 'getContent'])->name('getContent');
        Route::resource('content', ContentController::class);
        Route::get('contactIndex', [ContactController::class, 'contactIndex'])->name('contactIndex');
        Route::get('getTestimonial', [TestimonialController::class , 'getTestimonial'])->name('getTestimonial');
        Route::post('delete/{comment}', [CommentController::class, 'destroy'])->name('deleteComment');
        Route::post('deleteTestimonial/{testimonial}', [TestimonialController::class, 'destroy'])->name('deleteTestimonial');
        Route::resource('type', TypeController::class);
        Route::post('cart', [CommentController::class, 'store'])->name('cart');
        Route::get('comment', [CommentController::class, 'index'])->name('comment');
        Route::resource('order', OrderController::class);


    });
//  Route::group(['middleware' => 'user'], function () {
        Route::post('addComment', [CommentController::class, 'store'])->name('addComment');
        Route::post('search', [CategoryController::class, 'search'])->name('search');
        Route::get('getAllOrder', [OrderController::class, 'getAllOrder'])->name('getAllOrder');
        Route::post('addOrder', [OrderController::class, 'store'])->name('addOrder');
        Route::get('ShowContent/{content}', [ContentController::class, 'show'])->name('ShowContent');
        Route::resource('Testimonial', TestimonialController::class);

        Route::get('remove/{id}',[OrderController::class,'destroy']);
        Route::get('delete/{id}', [orderController::class, 'destroy'])->name('delete');


    });
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [TypeController::class, 'getType'])->name('getType');
Route::get('getAllCategory/{type}', [CategoryController::class, 'getAllCategory'])->name('getAllCategory');
Route::get('getAllContent/{category}', [ContentController::class, 'getAllContent'])->name('getAllContent');

Route::post('Contact', [ContactController::class, 'store'])->name('addContact');
Route::get('Contact', [ContactController::class, 'index'])->name('getAllContact');
Route::get('condition',function(){
    return view('ret&exc');
});
Route::get('shippinginfo',function(){
    return view('shippinginfor');
});