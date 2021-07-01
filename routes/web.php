<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\CocktailItemsController;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\admin\CocktailCategoriesController;

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
Route::get('/admin/cocktail-categories', [CocktailCategoriesController::class, 'index']);
Route::get('/admin/cocktail-categories/create', [CocktailCategoriesController::class, 'create']);
Route::get('/admin/cocktail-categories/edit', [CocktailCategoriesController::class, 'edit']);

//Admin Cocktails Items
Route::get('/admin/cocktail-items', [CocktailItemsController::class, 'index']);
Route::get('/admin/cocktail-items/create', [CocktailItemsController::class, 'create']);
Route::get('/admin/cocktail-items/edit', [CocktailItemsController::class, 'edit']);

//Admin Food Categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create']);
Route::get('/admin/food-categories/edit', [FoodCategoriesController::class, 'edit']);

//Admin Food Items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create']);
Route::get('/admin/food-items/edit', [FoodItemsController::class, 'edit']);

//Admin Customers
//Admin Members
Route::get('/admin/members', [MemberController::class, 'index']);

//Admin Reservations
Route::get('/admin/reservations', [ReservationController::class, 'index']);

//Admin Users
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/create', [UsersController::class, 'create']);
Route::get('/admin/users/edit', [UsersController::class, 'edit']);

//Admin Dashboard
//Route::get('/admin', [AdminController::class, 'dashboard']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
