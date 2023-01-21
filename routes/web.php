<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\backend\WishController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\Frontend\FrontentController;
use App\Http\Controllers\backend\OrderdetailsController;



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
//userlogincontroller
/////////////////////////////////////////Frontend    in /////////////////////////////////////////////////




Route::get('/',[FrontentController::class,'homepage'])->name('homepage');

Route::post('/user-login',[FrontentController::class,'Frontentlogin'])->name('userlogin');////////////////////////

Route::post('/user-register',[FrontentController::class,'register'])->name('user.store');






/////////////////////////////////////////////////////////////////backend in /////////////////////////////////


Route::get('/Registrationfrom',[AuthController::class,'Registrationfrom'])->name('Registration.from');
Route::post('/Reg-submit',[AuthController::class,'submit'])->name('Registration.submit');


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login-store',[AuthController::class,'store'])->name('login.store');


Route::get('/Logout',[AuthController::class,'logout'])->name('logout.from');
Route::group(['middleware'=>'auth'],function(){
Route::get('/admin-master',[AdminController::class,'master'])->name('admin.master');
Route::get('/admin-newpage',[AdminController::class,'newpage']);






Route::get('/category-list',[CategoryController::class,'list'])->name('aa.category.list');
Route::get('/category-create-from',[CategoryController::class,'createFrom'])->name('aa.create.from');
Route::post('/category-store',[CategoryController::class,'store'])->name('aa.category.store');
Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('aa.category.view');
Route::get('/category/edit/{id}',[CategoryController::class,'editcategory'])->name('aa.category.edit');
Route::put('/category-update/{id}',[CategoryController::class,'updatecategory'])->name('aa.category.update');
Route::get('/category-Delete/{id}',[CategoryController::class,'delete'])->name('aa.category.delete');



Route::get('/customer-list',[CustomerController::class,'customerlist'])->name('bb.customer.list');
Route::get('/customer-create-from',[CustomerController::class,'createFrom'])->name('bb.create.from');
Route::post('/customer-submit',[CustomerController::class,'submit'])->name('bb.customer.submit');
Route::get('/customer/view{id}',[CustomerController::class,'view'])->name('bb.customer.view');
Route::get('/customer/edit/{id}',[CustomerController::class,'editCustomer'])->name('bb.customer.edit');
Route::put('/customer-update/{id}',[CustomerController::class,'updateCustomer'])->name('bb.customer.update');
Route::get('/customer-Delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');




Route::get('/payment-list',[PaymentController::class,'paymentlist'])->name('cc.payment.list');
Route::get('/payment-create-from',[PaymentController::class,'createfrom'])->name('cc.create.from');
Route::post('/payment-submit',[PaymentController::class,'submit'])->name('cc.payment.submit');
Route::get('/payment-Delete/{id}',[PaymentController::class,'delete'])->name('cc.payment.delete');
Route::get('/payment/edit/{id}',[PaymentController::class,'editpayment'])->name('cc.payment.edit');
Route::put('/payment-update/{id}',[PaymentController::class,'updatepayment'])->name('cc.payment.upadte');
 


Route::get('/Order-list',[OrderController::class,'createlist'])->name('dd.order.list');
Route::get('/order-create-from',[OrderController::class,'createfrom'])->name('dd.create.from');
Route::post('/order-create-submet',[OrderController::class,'submetfrom'])->name('dd.submet.from');
Route::get('/order-view/{id}',[OrderController::class,'view'])->name('dd.order.view');
Route::get('/order-edit/{id}',[OrderController::class,'editorder'])->name('dd.order.edit');
Route::put('/order-update/{id}',[OrderController::class,'updateorder'])->name('dd.order.update');
Route::get('/order-Delete/{id}',[OrderController::class,'delete'])->name('dd.order.delete');




Route::get('/brand-list',[BrandController::class,'createlist'])->name('ee.brand.list');
Route::get('/brand-create-from',[BrandController::class,'createfrom'])->name('ee.brand.from');
Route::post('/brand-create-store',[BrandController::class,'store'])->name('ee.brand.store');
Route::get('/brand-edit/{id}',[BrandController::class,'editbrand'])->name('ee.brand.edit');
Route::get('/brand-delete/{id}',[BrandController::class,'delete'])->name('ee.brand.delete');
Route::put('/brand-update/{id}',[BrandController::class,'updatebrand'])->name('ee.brand.update');




Route::get('/wish-list',[WishController::class,'list'])->name('ff.wish.list');
Route::get('/wish-create-from',[WishController::class,'createfrom'])->name('ff.cerate.from');
Route::post('/wish-create-store',[WishController::class,'store'])->name('ff.store.from');
Route::get('/wish/edit/{id}',[WishController::class,'edit'])->name('ff.wish.edit');
Route::get('/wish/delete/{id}',[WishController::class,'delete'])->name('ff.wish.delete');
Route::put('/wish-update/{id}',[WishController::class,'updetewish'])->name('ff.wish.update');



Route::get('/product-list',[ ProductController::class,'productlist'])->name('gg.product.list');
Route::get('/product-from',[ProductController::class,'createfrom'])->name('gg.create.from');
Route::post('/product-create-store',[ProductController::class,'store'])->name('gg.store.from');
Route::get('/product/edit/{id}',[ProductController::class,'editproduct'])->name('gg.product.edit');
Route::put('/product-update/{id}',[ProductController::class,'updateproduct'])->name('gg.product.update');
Route::get('/product-delete/{id}',[ProductController::class,'delete'])->name('gg.product.delete');


 

Route::get('/order-detaills-list',[OrderdetailsController::class,'orderdetails'])->name('hh.orderdetails.list');
Route::get('/order-fromo orderdetail',[OrderdetailsController::class,'createFrom'])->name('hh.create.from');
Route::post('/order-store',[OrderdetailsController::class,'store'])->name('hh.details.store');
Route::get('/order-details/edit/{id}',[OrderdetailsController::class,'editdetails'])->name('hh.detail.edit');
Route::put('/orderdetails-update/{id}',[OrderdetailsController::class,'updatedetails'])->name('hh.detail.update');
Route::get('/orderdetails-delete/{id}',[OrderdetailsController::class,'delete'])->name('hh.detail.delete');

















});








