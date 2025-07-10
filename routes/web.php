<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_dealer', 'HomeDealerController@index')->name('home_dealer');

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/popular', 'ProductController@popular')->name('popular.index');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/grill', function () {
    return view('grill');
})->name('grill');

Route::get('/eazy_kalan', function () {
    return view('eazy_kalan');
})->name('eazy_kalan');

Route::get('/cyllinder', function () {
    return view('cyllinder');
})->name('cyllinder');

Route::get('/torch', function () {
    return view('torch');
})->name('torch');

Route::get('/order_dealer', function () {
    return view('order_dealer');
})->name('order_dealer');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/merchants', function () {
    return view('merchants');
})->name('merchants');

Route::get('/list_product', function () {
    return view('list_product');
})->name('list_product');

Route::get('/add_product', function () {
    return view('add_product');
})->name('add_product');

Route::get('/manage_store', function () {
    return view('manage_store');
})->name('manage_store');

