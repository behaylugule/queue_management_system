<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('user.home');
// });
Route::get('/', [homeController::class,'home']);
Route::get('/items', [homeController::class,'getItem']);
Route::get('/news', [homeController::class,'getNews']);
Route::get('/newsdetail/{id}',[homeController::class,'newsDetail']);
Route::get('/booking',  [homeController::class,'getCart']);
Route::get('/remove_from_cart/{id}',[homeController::class,'removeItemCart']);
Route::post('/booking',[homeController::class,'book']);
Route::get('/search',[homeController::class,'search']);
Route::get('/searchnews',[homeController::class,'searchNews']);
Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/home', [homeController::class,'redirect']);
Route::get('/add_item',[adminController::class,'addItem']);
Route::post('/upload_item',[adminController::class,'upload']);
Route::get('/items_list',[adminController::class,'itemList']);
Route::get('/delete_item/{id}',[adminController::class,'deleteItem']);
Route::get('/updateitem/{id}', [adminController::class,'showupdateItem']);
Route::post('/update_item/{id}', [adminController::class,'updateItem']);
Route::get('/add_news',[adminController::class,'addNews']);
Route::post('/create_news',[adminController::class,'createNews']);
Route::get('/news_list',[adminController::class,'newsList']);
Route::get('/single_news/{id}',[adminController::class,'singleList']);
Route::get('/delete_news/{id}',[adminController::class,'deleteNews']);
Route::get('/updatenews/{id}', [adminController::class,'showupdateNews']);
Route::post('/update_news/{id}', [adminController::class,'updateNews']);
Route::get('/time_table',[adminController::class,'getTimeTable']);
Route::get('/update_time_table/{id}',[adminController::class,'updateTimeTable']);
Route::get('/no_user_per_hour',[adminController::class,'getUserPerHour']);
Route::post('/update_user_per_hour/{id}',[adminController::class,'updateUserPerHour']);
Route::get('/booking_list',[adminController::class,'getBookingList'])->name('booking_list');
Route::get('/booking_detail/{id}',[adminController::class,'getBookingDetail']);
Route::get('/booking_finish/{id}',[adminController::class,'finishBooking']);
Route::get('/attach/{id}',[homeController::class,'addToCart']);
Route::get('/story', [adminController::class,'story']);
Route::get('/user_list',[adminController::class, 'getUser']);
Route::get('/addmember/{id}',[adminController::class,'addMember']);
Route::get('/deleteuser/{id}',[adminController::class,'deleteUser']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
