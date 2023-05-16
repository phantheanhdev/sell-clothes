<?php

use App\Controllers\AccountController;
use App\Controllers\CartController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\SizeController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

// ====================== user ====================
// home
Router::get('/', [HomeController::class, 'index']);
Router::get('/home', [HomeController::class, 'index']);

// men 
Router::get('/men', [ProductController::class, 'men_page']);
Router::get('/men_t_shirt', [ProductController::class, 'men_t_shirt']);
Router::get('/men_jackets', [ProductController::class, 'men_jackets']);
Router::get('/men_short', [ProductController::class, 'men_short']);
Router::get('/men_jean', [ProductController::class, 'men_jean']);

// women 
Router::get('/women', [ProductController::class, 'women_page']);
Router::get('/women_t_shirt', [ProductController::class, 'women_t_shirt']);
Router::get('/women_jackets', [ProductController::class, 'women_jackets']);
Router::get('/women_short', [ProductController::class, 'women_short']);
Router::get('/women_jean', [ProductController::class, 'women_jean']);

// account
Router::get('/log_in', [AccountController::class, 'log_in']);
Router::get('/register', [AccountController::class, 'register']);

// shopping cart
Router::get('/cart', [CartController::class, 'cart']);

// ================ admin ====================
// products
Router::get('/ad_list_pro', [ProductController::class, 'ad_list_pro']);
Router::get('/ad_add_pro', [ProductController::class, 'ad_add_pro']);
Router::post('/ad_save_add_pro', [ProductController::class, 'ad_save_add_pro']);
Router::get('/ad_delete_pro', [ProductController::class, 'ad_delete_pro']);
Router::get('/ad_update_pro', [ProductController::class, 'ad_update_pro']);
Router::post('/ad_save_update_pro', [ProductController::class, 'ad_save_update_pro']);

// categories
Router::get('/ad_list_categories', [CategoryController::class, 'ad_list_categories']);
Router::get('/ad_add_categories', [CategoryController::class, 'ad_add_categories']);
Router::post('/ad_save_add_categories', [CategoryController::class, 'ad_save_add_categories']);
Router::get('/ad_detele_categories', [CategoryController::class, 'ad_detele_categories']);
Router::get('/ad_update_categories', [CategoryController::class, 'ad_update_categories']);
Router::post('/ad_save_update_categories', [CategoryController::class, 'ad_save_update_categories']);

// sizes
Router::get('/ad_list_size', [SizeController::class, 'ad_list_size']);
Router::get('/ad_add_size', [SizeController::class, 'ad_add_size']);
Router::post('/ad_save_add_size', [SizeController::class, 'ad_save_add_size']);
Router::get('/ad_delete_size', [SizeController::class, 'ad_delete_size']);
Router::get('/ad_update_size', [SizeController::class, 'ad_update_size']);
Router::post('/ad_save_update_size', [SizeController::class, 'ad_save_update_size']);



$router->resolve();
// oek