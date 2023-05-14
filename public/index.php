<?php

use App\Controllers\AccountController;
use App\Controllers\CartController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
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
Router::get('/ad_list_pro', [ProductController::class, 'ad_list_pro']);
Router::get('/ad_add_pro', [ProductController::class, 'ad_add_pro']);
Router::post('/ad_save_add_pro', [ProductController::class, 'ad_save_add_pro']);
Router::get('/ad_delete_pro', [ProductController::class, 'ad_delete_pro']);
Router::get('/ad_update_pro', [ProductController::class, 'ad_update_pro']);
Router::post('/ad_save_update_pro', [ProductController::class, 'ad_save_update_pro']);


$router->resolve();
