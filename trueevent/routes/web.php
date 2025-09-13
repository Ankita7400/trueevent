<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServiceCategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\backend\ContactRequestController;

use function Termwind\style;

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
//     return view('welcome');
// });

Route::get('/login',[LoginController::class,'login'])->name('login');

Route::post('login', [LoginController::class, 'loginstore'])->name('store.login');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('about', [IndexController::class, 'about'])->name('about');
Route::get('contact', [IndexController::class, 'contact'])->name('contact');


Route::get('/category/{slug}', [IndexController::class, 'showCategory'])->name('category.show');
Route::get('/subcategory/{slug}', [IndexController::class, 'showSubCategory'])->name('subcategory.show');


Route::get('/categories', [IndexController::class, 'allCategories'])->name('all.categories');





Route::group(['middleware'=>'auth'],function(){

    Route::get('admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    // Service Category Routes
Route::get('admin/service-categories', [ServiceCategoryController::class, 'index'])->name('admin.service-categories.index');
Route::get('admin/service-categories/create', [ServiceCategoryController::class, 'create'])->name('admin.service-categories.create');
Route::post('admin/service-categories', [ServiceCategoryController::class, 'store'])->name('admin.service-categories.store');
Route::get('admin/service-categories/{id}/edit', [ServiceCategoryController::class, 'edit'])->name('admin.service-categories.edit');
Route::put('admin/service-categories/{id}', [ServiceCategoryController::class, 'update'])->name('admin.service-categories.update');
Route::get('admin/service-categories/{id}', [ServiceCategoryController::class, 'destroy'])->name('admin.service-categories.destroy');

// Subcategory Routes
Route::get('admin/sub-categories', [SubCategoryController::class, 'index'])->name('admin.sub-categories.index');
Route::get('admin/sub-categories/create', [SubCategoryController::class, 'create'])->name('admin.sub-categories.create');
Route::post('admin/sub-categories', [SubCategoryController::class, 'store'])->name('admin.sub-categories.store');
Route::get('admin/sub-categories/{id}/edit', [SubCategoryController::class, 'edit'])->name('admin.sub-categories.edit');
Route::put('admin/sub-categories/{id}', [SubCategoryController::class, 'update'])->name('admin.sub-categories.update');
Route::get('admin/sub-categories/{id}', [SubCategoryController::class, 'destroy'])->name('admin.sub-categories.destroy');


// Product Routes
Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::get('admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');


// Admin view
Route::get('/admin/contact', [ContactRequestController::class, 'ContactList'])->name('admin.contact'); // Protect with auth

//  Route::get('admin/contact/{id}', [ContactRequestController::class, 'show'])->name('admin.contactShow');
    Route::delete('admin/contact/{id}', [ContactRequestController::class, 'destroy'])->name('admin.contact.destroy');
});
// Form submission
Route::post('/contact/store', [ContactRequestController::class, 'store'])->name('contact.store');
