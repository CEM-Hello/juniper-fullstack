<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\CocktailItemsController;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\admin\CocktailCategoriesController;
use App\Models\GeneralSetting;
use App\Models\SocialSetting;
use App\Models\SeoSetting;

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

//Static Pages
Route::get('/', [StaticPagesController::class, 'home']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/products', [StaticPagesController::class, 'products']);
Route::get('/tasting-room', [StaticPagesController::class, 'tastingRoom']);
Route::get('/cocktail-menu/{slug}', [StaticPagesController::class, 'cocktailMenu']);
Route::get('/restaurant', [StaticPagesController::class, 'restaurant']);
Route::get('/food-menu/{slug}', [StaticPagesController::class, 'foodMenu']);
Route::get('/reservations', [StaticPagesController::class, 'reservations']);
Route::post('/reservations', [StaticPagesController::class, 'saveReservation']);
Route::get('/events', [StaticPagesController::class, 'events']);
Route::get('/barrel-club', [StaticPagesController::class, 'barrelClub']);
Route::post('/barrel-club', [StaticPagesController::class, 'registerMember']);
Route::get('/barrel-club/thank-you', [StaticPagesController::class, 'barrelThankYou']);
Route::get('/barrel-news', [StaticPagesController::class, 'barrelNews']);
Route::get('/contact', [StaticPagesController::class, 'contact']);

//Admin Cocktails Categories
Route::get('/admin/cocktail-categories', [CocktailCategoriesController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/cocktail-categories/create', [CocktailCategoriesController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/cocktail-categories', [CocktailCategoriesController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/cocktail-categories/{id}/edit', [CocktailCategoriesController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/cocktail-categories/{id}', [CocktailCategoriesController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/cocktail-categories/{id}/delete', [CocktailCategoriesController::class, 'delete'])->middleware('role:Admin');

//Admin Cocktails Items
Route::get('/admin/cocktail-items', [CocktailItemsController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/cocktail-items/create', [CocktailItemsController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/cocktail-items', [CocktailItemsController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/cocktail-items/{id}/edit', [CocktailItemsController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/cocktail-items/{id}', [CocktailItemsController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/cocktail-items/{id}/delete', [CocktailItemsController::class, 'delete'])->middleware('role:Admin');

//Admin Food Categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/food-categories', [FoodCategoriesController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', [FoodCategoriesController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/food-categories/{id}/delete', [FoodCategoriesController::class, 'delete'])->middleware('role:Admin');

//Admin Food Items
Route::get('/admin/food-items', [FoodItemsController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/food-items', [FoodItemsController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/food-items/{id}', [FoodItemsController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/food-items/{id}/delete', [FoodItemsController::class, 'delete'])->middleware('role:Admin');

//Admin Customers
//Admin Members
Route::get('/admin/members', [MemberController::class, 'index']);
Route::delete('/admin/members/{id}/delete', [MemberController::class, 'delete']);

//Admin Reservations
Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::delete('/admin/reservations/{id}/delete', [ReservationController::class, 'delete']);

//Admin Users
Route::get('/admin/users', [UsersController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/users/create', [UsersController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/users', [UsersController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/users/{id}', [UsersController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/users/{id}/delete', [UsersController::class, 'delete'])->middleware('role:Admin');

//Admin Settings
Route::get('/admin/settings/general', [SettingController::class, 'general'])->middleware('role:Admin');
Route::put('/admin/settings/general', [SettingController::class, 'saveGeneral'])->middleware('role:Admin');
Route::get('/admin/settings/seo', [SettingController::class, 'seo'])->middleware('role:Admin');
Route::put('/admin/settings/seo', [SettingController::class, 'saveSeo'])->middleware('role:Admin');
Route::get('/admin/settings/social', [SettingController::class, 'social'])->middleware('role:Admin');
Route::put('/admin/settings/social', [SettingController::class, 'saveSocial'])->middleware('role:Admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/estimated-revenue-daily', [AdminController::class, 'dailyRevenueLast30']);

View::composer(['home', 'cocktail-menu/index', 'cocktail-menu/cocktail-menu', 'food-menu/index', 'food-menu/food-menu', 'pages/our-products', 'pages/barrel-club', 'pages/reservations', 'pages/events', 'pages/contact', 'pages/products', 'pages/about', 'pages/barrel-news', 'barrel-club/thank-you', 'reservations/thank-you', 'events/thank-you'], function ($view) {
  $generalSettings = GeneralSetting::find(1);
  $socialSettings = SocialSetting::find(1);
  $seoSettings = SeoSetting::find(1);

  
  $view->with('settings', [
      "general" => $generalSettings,
      "social" => $socialSettings,
      "seo" => $seoSettings
  ]);
});