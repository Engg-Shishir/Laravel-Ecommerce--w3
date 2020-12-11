<?php

use Illuminate\Support\Facades\Route;
#---====== Include Usabble Controller ======------>
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CuponController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



#---====== Frontend Home page Rpoute ======------>
Route::get('/',[FrontendController::class, 'index'])->name('front.home');


#---====== Admin Login View ======------>
Route::get('/admin',[LoginController::class,'showLoginForm'])->name('admin.login');

#---====== Admin Login  ======------>
Route::post('/admin',[LoginController::class,'login']);

#---====== Admin home page  ======------>
Route::get('/admin/home', [AdminController::class, 'index']);

#---====== Admin Logout ======------>
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');












#---====== Admin categorys ======------>
Route::get('/admin/categorys',[CategoryController::class,'index'])->name('admin.categorys');


#---====== Category Add  ======------>
Route::post('/admin/category_store',[CategoryController::class,'store_category'])->name('store.category');


#---====== Category Delete ======------>
Route::get('/category/delete/{id}',[CategoryController::class,'delete']);


#---====== Category Edit ======------>
Route::get('/category/edit/{id}',[CategoryController::class,'edit']);


#---====== Category Update  ======------>
Route::post('/admin/category_update',[CategoryController::class,'category_update'])->name('update.category');

#---====== Manage Category Status ======------>
Route::get('/category/status/{cid}/{status}',[CategoryController::class,'status']);













//<-----===================== Brand ====================------------>

#---====== Admin Brand Page======------>
Route::get('/admin/brand',[BrandController::class,'index'])->name('admin.brand');

#---====== Brand Add  ======------>
Route::post('/admin/brand_store',[BrandController::class,'store_brand'])->name('store.brand');

#---====== Brand Delete ======------>
Route::get('/brand/delete/{id}',[BrandController::class,'delete']);

#---====== Brand Edit ======------>
Route::get('/brand/edit/{id}',[BrandController::class,'edit']);

#---====== Brand Update  ======------>
Route::post('/admin/brand_update',[BrandController::class,'brand_update'])->name('update.brand');

#---====== Brand status Manage ======------>
Route::get('/brand/status/{bid}/{status}',[BrandController::class,'status']);













//<-----===================== Products ====================------------>

#---====== Open Add ProductForm ======------>
Route::get('/admin/product',[ProductController::class,'add_product_form'])->name('add-products');


#---====== Store Product  ======------>
Route::post('/store/product',[ProductController::class,'store_product'])->name('store.product');


#---====== Open Add ProductForm ======------>
Route::get('/admin/manage/product',[ProductController::class,'manage_product_form'])->name('manage-products');


#---====== Brand Delete ======------>
Route::get('/product/delete/{id}',[ProductController::class,'deletes']);


#---====== Brand Edit ======------>
Route::get('/product/edit/{id}',[ProductController::class,'edit']);

#---====== Brand Edit ======------>
Route::post('/admin/product_update',[ProductController::class,'product_update'])->name('update.product');

#---====== Brand Edit ======------>
Route::post('/admin/product_update_image',[ProductController::class,'product_update_image'])->name('update.pimage');

#---====== Brand status Manage ======------>
Route::get('/product/status/{pid}/{status}',[ProductController::class,'status']);

















#---====== Admin categorys ======------>
Route::get('/admin/cupon',[CuponController::class,'index'])->name('admin.cupon');

#---====== Category Add  ======------>
Route::post('/admin/cupon_store',[CuponController::class,'store_cupon'])->name('store.cupon');

#---====== Category Delete ======------>
Route::get('/cupon/delete/{id}',[CuponController::class,'delete']);

#---====== Brand Edit ======------>
Route::get('/cupon/edit/{id}',[CuponController::class,'edit']);


#---====== Brand Update  ======------>
Route::post('/admin/cupon_update',[CuponController::class,'cupon_update'])->name('update.cupon');

#---====== Brand status Manage ======------>
Route::get('/cupon/status/{cid}/{status}',[CuponController::class,'status']);














#---====== Open Add ProductForm ======------>
Route::get('/admin/order',[OrderController::class,'index'])->name('admin.order');
#---====== Brand Delete ======------>
Route::get('/admin/order/view/{id}',[OrderController::class,'view_order']);

























#---====== Brand status Manage ======------>
Route::post('/add/to_cart/{id}',[CartController::class,'addToCart']);


#---====== Category Delete ======------>
Route::get('/cart',[CartController::class,'cartPage']);

#---====== Category Delete ======------>
Route::get('/cart/remove/{id}',[CartController::class,'remove']);

#---====== Category Delete ======------>
Route::post('/cart/qty/update/{id}',[CartController::class,'qty_update']);


#---====== Category Delete ======------>
Route::post('/cupon/aplay',[CartController::class,'cupon_aplay']);

#---====== Category Delete ======------>
Route::get('/cupon/remove',[CartController::class,'cupon_remove']);












#---====== Brand status Manage ======------>
Route::get('/add/to_wishlist/{id}',[WishListController::class,'addToWishList']);

#---====== Category Delete ======------>
Route::get('/wishlist',[WishListController::class,'wishlistPage']);

#---====== Category Delete ======------>
Route::get('/wishlist/remove/{id}',[WishListController::class,'remove']);







#---====== Category Delete ======------>
Route::get('/product/details/{id}',[FrontendController::class,'productdetails']);




#---====== Category Delete ======------>
Route::get('/checkout',[CheckoutController::class,'checkoutview']);


#---====== Category Delete ======------>
Route::post('/place_order',[UserOrderController::class,'store_order'])->name('place_order');




#---====== Category Delete ======------>
Route::get('/order/success',[CheckoutController::class,'order_success']);












#---====== Brand status Manage ======------>
Route::get('/user/order',[UserController::class,'order'])->name('user.order');

#---====== Brand status Manage ======------>
Route::get('/user/order/view/{id}',[UserController::class,'order_view']);















#---====== Category Delete ======------>
Route::get('/shop',[FrontendController::class,'shopage'])->name('shop.page');






#---====== Category Delete ======------>
Route::get('/category/product_show/{id}',[FrontendController::class,'catWiseProduct']);