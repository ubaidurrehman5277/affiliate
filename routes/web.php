<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\StripePaymentController;
Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class,'index'])->name('index');
Route::get('/about', [FrontendController::class,'about'])->name('about');
Route::get('/adds', [FrontendController::class,'adds'])->name('adds');
Route::get('/store', [FrontendController::class,'store'])->name('store');
Route::get('/product-update', [FrontendController::class,'product_update'])->name('product-update');
Route::get('/earning', [FrontendController::class,'earning'])->name('earning');
Route::get('/testimonial', [FrontendController::class,'testimonial'])->name('testimonial');
Route::get('/support', [FrontendController::class,'support'])->name('support');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/pricing', [FrontendController::class,'pricing'])->name('pricing');
// Route::match(['get','match'],'/signup', [FrontendController::class,'signup'])->name('signup');
Route::match(['get','post'],'/signup',[App\Http\Controllers\FrontendController::class,'signup'])->name('signup');
Route::match(['get','post'],'/signin',[App\Http\Controllers\FrontendController::class,'signin'])->name('signin');

// Route::match(['get','post'],'/admin',[LoginController::class,'admin'])->name('admin');

Route::match(['get','post'],'/admin' , [App\Http\Controllers\loginController::class , 'admin'])->middleware("guest:admin")->name('admin');
Route::group(['prefix'=>'/admin','middleware'=>['auth:admin']],function(){
	Route::match(['get','post'],'/dashboard',[App\Http\Controllers\loginController::class,'dashboard'])->name('dashboard');
Route::match(['get','post'],'/add-features',[App\Http\Controllers\loginController::class,'add_features'])->name('add-features');
Route::match(['get','post',],'/plans',[LoginController::class,'plans'])->name('plans');
Route::match(['get','post',],'/plan-list',[LoginController::class,'plan_list'])->name('plan-list');

Route::get('/adminlogout' , function(){
	    Auth::guard('admin')->logout();
	    return redirect(route('admin'));
	  })->name('adminlogout');
});

// Route::match(['get','post'],'/admin/dashboard',[LoginController::class,'dashboard'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe')->name('stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

