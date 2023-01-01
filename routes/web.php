<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\productController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\controllerOrder_Detall;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/Registrationfrom',[AuthController::class,'Registrationfrom'])->name('Registration.from');
Route::post('/Reg-submit',[AuthController::class,'submit'])->name('Registration.submit');


Route::get('/login',[AuthController::class,'login'])->name('login.from');





Route::get('/admin-master',[AdminController::class,'master']);
Route::get('/admin-newpage',[AdminController::class,'newpage']);





Route::get('/category-list',[CategoryController::class,'list'])->name('aa.category.list');
Route::get('/category-create-from',[CategoryController::class,'createFrom'])->name('aa.create.from');
Route::post('/category-store',[CategoryController::class,'store'])->name('aa.category.store');
Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('aa.category.view');




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

 


Route::get('/Order-list',[OrderController::class,'createlist'])->name('dd.order.list');
Route::get('/order-create-from',[OrderController::class,'createfrom'])->name('dd.create.from');
Route::post('/order-create-submet',[OrderController::class,'submetfrom'])->name('dd.submet.from');
Route::get('/order-Delete/{id}',[OrderController::class,'delete'])->name('order.delete');
Route::get('/order-edit/{id}',[OrderController::class,'editorder'])->name('dd.order.edit');





Route::get('/brand-list',[BrandController::class,'createlist'])->name('ee.brand.list');
Route::get('/brand-create-from',[BradController::class,'createFrom'])->name('ee.create.from');
Route::post('/brand-create-submet',[BrandController::class,'submetFrom'])->name('ee.submet.from');





Route::get('/products-list',[productController::class,'list'])->name('product.list');
Route::get('/product-create-from',[ProductController::class,'createFrom']);
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');









