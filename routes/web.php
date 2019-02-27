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
use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', function () {
    return redirect()->route('products');
});

Auth::routes();
Route::middleware('auth')->group(function(){
	Route::get('/dashboard','ProductController@dashboard')->name('home');
	Route::get('/manage-product','ProductController@index')->name('product.index');
	Route::get('/dashboard-add-product','ProductController@create')->name('dashboard-add-product');
//	Route::get('/user','UserController@index')->name('user.index');

	Route::resource('user','UserController');


//checkout
    Route::resource('checkout','CheckoutController');
    Route::post('checkout/pages','CheckoutController@pages')->name('checkout.pages');

//invoice
    Route::resource('transaction','TransactionController');

//Review
    Route::resource('review','ReviewController');

//Banner
    Route::resource('banner','BannerController');

//order history
    Route::resource('order','DetailTransactionController');

//review
    Route::resource('review','ReviewController');

    //profile
    Route::put('profile/{id}','UserController@profile')->name('profile');

//alamat
    Route::get('indonesia/regency','IndonesiaController@regency')->name('indonesia.regency');
    Route::get('indonesia/district','IndonesiaController@district')->name('indonesia.district');
    Route::get('indonesia/village','IndonesiaController@village')->name('indonesia.village');

//cart
    Route::get('cart/update/{id}/{qty}','CartController@updateCart')->name('cart.update');
    Route::get('/cart','CartController@index')->name('cart.index');
    Route::post('/cart','CartController@store')->name('cart.store');
    Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
    Route::delete('/cart','CartController@destroyall')->name('cart.destroyall');

});
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'ProductController@dashboard')->name('home');
Route::get('/','ProductController@welcome')->name('products');
Route::resource('product','ProductController');
Route::resource('user','UserController');

//product category
Route::resource('productCategory','ProductCategoryController');

//search product
Route::post('search','ProductController@search')->name('search');
Route::get('searchResult','ProductController@searchResult')->name('searchResult');

Route::get('empty', function() {
    Cart::destroy();
});

//Grafik
Route::get('sales','ProductController@sales')->name('sales'); //Penjualan
Route::get('topProduct','ProductController@topProduct')->name('topProduct'); //Top Product

//cart

// Route::get('home', function() {
//     return view('welcome');
// });
Route::get('product', function() {
    return view('product');
});
Route::get('mac', function() {
    return view('admin.ec-mail-detail');
});
Route::get('ipad', function() {
    return view('category.ipad');
});
Route::get('iphone', function() {
    return view('category.iphone');
});
Route::get('watch', function() {
    return view('category.watch');
});

//TEMPORARY
Route::get('mail', function() {
    return view('admin.ec-mail');
});
Route::get('mail-detail', function() {
    return view('admin.ec-mail-detail');
});
Route::get('payment', function() {
    return view('admin.ec-payment');
});
Route::get('payment-detail', function() {
    return view('admin.ec-payment-detail');
});