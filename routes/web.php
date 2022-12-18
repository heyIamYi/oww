<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderManageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\SocialUserController;
use App\Http\Controllers\CommentController;

use Illuminate\Support\Facades\Route;

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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';

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

/**
 * 購物車路由
 */

//購物網站首頁
Route::get('/', [HomepageController::class, 'index']);

//購物車第一頁
Route::get('/checkedout1', [ShoppingCarController::class, 'checkedout1']);

//購物車第二頁
Route::post('/checkedout2', [ShoppingCarController::class, 'checkedout2']);

//購物車第三頁
Route::post('/checkedout3', [ShoppingCarController::class, 'checkedout3']);

//購物車第四頁
Route::post('/checkedout4', [ShoppingCarController::class, 'checkedout4']);

//導覽頁面
Route::get('/show_order/{id}', [ShoppingCarController::class, 'show_order']);

/**
 * 購物車留言板CRUD
 */
//群組化
Route::prefix('/comment')->group(function () {
    Route::get('/', [CommentController::class, 'comment']); //首頁
    Route::get('/save', [CommentController::class, 'save_comment']); //儲存
    Route::get('/edit/{target}', [
        CommentController::class,
        'edit_comment',
    ]); //編輯
    Route::get('/{target}', [CommentController::class, 'update_comment']); //更新
    Route::get('/delete/{target}', [
        CommentController::class,
        'delete_comment',
    ]); //刪除
});

/**
 * 使用者管理頁面CRUD
 */
Route::prefix('/account')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', [AccountController::class, 'index']);
        Route::get('/create', [AccountController::class, 'create']);
        Route::post('/store', [AccountController::class, 'store']);
        Route::get('/edit/{id}', [AccountController::class, 'edit']);
        Route::post('/update/{id}', [AccountController::class, 'update']);
        Route::post('/delete/{id}', [AccountController::class, 'destroy']);
    });

/**
 * BANNER頁面CRUD
 */

Route::prefix('/banner')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', [BannerController::class, 'index']);
        Route::get('/create', [BannerController::class, 'create']);
        Route::post('/store', [BannerController::class, 'store']);
        Route::get('/edit/{id}', [BannerController::class, 'edit']);
        Route::post('/update/{id}', [BannerController::class, 'update']);
        Route::post('/delete/{id}', [BannerController::class, 'destroy']);
    });

/**
 *商品頁面CRUD
 */

Route::prefix('/product')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/create', [ProductController::class, 'create']);
        Route::post('/store', [ProductController::class, 'store']);
        Route::get('/edit/{id}', [ProductController::class, 'edit']);
        Route::post('/update/{id}', [ProductController::class, 'update']);
        Route::post('/delete/{id}', [ProductController::class, 'destroy']);
        Route::delete('/delete_img/{img_id}', [
            ProductController::class,
            'delete_img',
        ]);
    });

/**
 * 購物車訂單
 */
Route::prefix('/ordermanage')->group(function () {
    Route::get('/', [OrderManageController::class, 'index']);
    Route::get('/edit/{id}', [OrderManageController::class, 'edit']);
    Route::post('/update/{id}', [OrderManageController::class, 'update']);
});

/**
 * 其他商品相關路由
 */

// 商品回傳首頁
Route::get('/', [HomepageController::class, 'eightcard']);

//商品詳情
Route::get('/product/productinfo/{id}', [
    ProductController::class,
    'productinfo',
]);
//商品新增至購物車
Route::post('/add_to_cart', [ShoppingCarController::class, 'add_cart']);

// 刪除按鈕
Route::post('/deleteList/{id}', [ShoppingCarController::class, 'deleteList']);


/**
 * 第三方金流
 */
Route::get('/creditcard/{id}', [OrderController::class, 'creditcard']);

//callback 處理訂單狀態
Route::post('/callback', [OrderContorller::class, 'callback']);



/**
 * google 登入與重新導向
 */

Route::get('/google/redirect', [SocialUserController::class, 'googleredirect'])->name('googlelogin');
Route::get('/google/callback', [SocialUserController::class, 'googlecallback']);

/**
 * facebook 登入
 */
// Route::get('')
Route::get('/facebook/redirect', [SocialUserController::class, 'facebookredirect'])->name('facebooklogin');
Route::get('/facebook/callback', [SocialUserController::class, 'facebookcallback']);

/**
 * 暫時無用
 */

// // 將商品加入購物車
// Route::post('/ShoppingCart', [ShoppingCarController::class, 'add_carts']);


// success 成功則返回任何網址 (金流)
// Route::get('/success', [OrderContorller::class, 'checkedout4']);

