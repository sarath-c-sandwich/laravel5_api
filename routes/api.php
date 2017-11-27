<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/**
 * Buyer Resources
*/
Route::resource( 'buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']] );

/**
 * Sellers
*/
Route::resource( 'sellers', 'Seller\SellerController', ['only' => ['index', 'show']] );

/**
 * Products
*/
Route::resource( 'products', 'Product\ProductController', ['only' => ['index', 'show']] );

/**
 * Categories
*/
Route::resource( 'categories', 'Category\CategoryController', ['except' => ['create', 'edit']] );

/**
 * Transactions
*/
Route::resource( 'transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']] );

/**
 * Transactions
*/
Route::resource( 'users', 'User\UserController', ['except' => ['create', 'edit']] );
