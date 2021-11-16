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

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');

    //Order Details
    Route::get('/orders/order-details', [App\Http\Controllers\Admin\OrdersController::class, 'index']);
    Route::get('/order/{order}', [App\Http\Controllers\Admin\OrdersController::class, 'getOrder']);
    Route::match(['put', 'patch'], '/order/{order}/status', [\App\Http\Controllers\Admin\OrdersController::class, 'changeStatus']);

    //banners
    Route::get('/home-banner', [App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('/cafe-banner', [App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('/catering-banner', [App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('/gallery', [App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::post('/banner', [App\Http\Controllers\Admin\BannerController::class, 'store']);
    Route::post('/banner/destroy/{id}', [App\Http\Controllers\Admin\BannerController::class, 'destroy']);

    //testimonial
    Route::get('/testimonials', [App\Http\Controllers\Admin\TestimonialController::class, 'index']);
    Route::post('/testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'store']);
    Route::post('/testimonial/edit', [App\Http\Controllers\Admin\TestimonialController::class, 'update']);
    Route::post('/testimonials/destroy/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'destroy']);

    //cafe menu
    Route::get('/cafe', [App\Http\Controllers\Admin\CafeController::class, 'index']);
    Route::post('/cafe', [App\Http\Controllers\Admin\CafeController::class, 'store']);
    Route::post('/cafe/destroy/{id}', [App\Http\Controllers\Admin\CafeController::class, 'destroy']);

    //catering menu
    Route::get('/catering/{grandparent}', [App\Http\Controllers\Admin\CateringController::class, 'index']);
    Route::post('/catering/menu', [App\Http\Controllers\Admin\CateringController::class, 'store']);
    Route::post('/catering/edit', [App\Http\Controllers\Admin\CateringController::class, 'update']);
    Route::post('/catering/destroy/{id}', [App\Http\Controllers\Admin\CateringController::class, 'destroy']);

    //Settings
    Route::get('/site-settings', [App\Http\Controllers\Admin\SiteController::class, 'index']);
    Route::post('/site-settings', [App\Http\Controllers\Admin\SiteController::class, 'update']);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/cafe', [App\Http\Controllers\HomeController::class, 'cafe']);
Route::get('/catering', [App\Http\Controllers\HomeController::class, 'catering']);
Route::post('/catering', [App\Http\Controllers\HomeController::class, 'menu']);
Route::get('/review', [App\Http\Controllers\HomeController::class, 'review']);
Route::get('/details', [App\Http\Controllers\HomeController::class, 'details']);
Route::get('/detail-delivery', [App\Http\Controllers\HomeController::class, 'detailsDelivery']);
Route::post('/details', [App\Http\Controllers\HomeController::class, 'detailsPost']);
Route::post('/delete-menu', [App\Http\Controllers\HomeController::class, 'deleteMenu']);
Route::post('/edit-menu', [App\Http\Controllers\HomeController::class, 'editMenu']);
Route::get('/success', [App\Http\Controllers\HomeController::class, 'success']);

Route::get('/catering/breakfast', [App\Http\Controllers\HomeController::class, 'breakfast']);
Route::get('/catering/tea', [App\Http\Controllers\HomeController::class, 'tea']);
Route::get('/catering/lunch', [App\Http\Controllers\HomeController::class, 'lunch']);
Route::get('/catering/dinner', [App\Http\Controllers\HomeController::class, 'dinner']);
Route::get('/catering/more/{type}', [App\Http\Controllers\HomeController::class, 'more']);
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact']);


Route::get('/contact-us', function () {
    return view('contact-us');
});