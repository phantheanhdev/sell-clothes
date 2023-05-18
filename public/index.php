<?php

session_start();

use App\Controllers\CartController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\SizeController;
use App\Controllers\UserController;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router;

// ====================== user ====================
// home
Router::get('/', [HomeController::class, 'index']);
Router::get('/home', [HomeController::class, 'index']);

// product by type 
Router::get('/products_by_type', [ProductController::class, 'products_by_type']);

// users
Router::get('/log_in', [UserController::class, 'log_in']);
Router::post('/submit_log_in', [UserController::class, 'submit_log_in']);
Router::get('/log_out', [UserController::class, 'log_out']);
Router::get('/register', [UserController::class, 'register']);
Router::post('/save_register', [UserController::class, 'save_register']);

// shopping cart
Router::get('/cart', [CartController::class, 'cart']);

// single product
Router::get('/single_product', [ProductController::class, 'single_product']);


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

// user
Router::get('/ad_list_user', [UserController::class, 'ad_list_user']);
Router::get('/ad_add_user', [UserController::class, 'ad_add_user']);
Router::post('/ad_save_add_user', [UserController::class, 'ad_save_add_user']);
Router::get('/ad_delete_user', [UserController::class, 'ad_delete_user']);
Router::get('/ad_update_user', [UserController::class, 'ad_update_user']);
Router::post('/ad_save_update_user', [UserController::class, 'ad_save_update_user']);


$router->resolve();
