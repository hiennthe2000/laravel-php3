<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\ProductController as ClientPorduct;
use App\Http\Controllers\Client\PostController as ClientPost;
use App\Http\Controllers\Client\ArchiveController as ClientArchive;
use App\Http\Controllers\Auth\EditRouteUser;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*
 * -----------------------------------Route giao diện người dùng-------------------------------------------------
 */

//Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('client.index');
//Trang giới thiệu
Route::get('/about', [HomeController::class, 'about'])->name('about_page');
//Trang sản phẩm
Route::get('/product', [ClientPorduct::class, 'product'])->name('product_page');
//Trang bai viet
Route::get('/posts', [ClientPost::class, 'categoryPosts'])->name('post_page');
//Trang lien he
Route::get('/contact', [HomeController::class, 'contact'])->name('contact_page');
//chi tiet loai tin
Route::get('/client/deltail-category/{id}',[ClientArchive::class,'categoryPost'])->name('Category_Product');
Route::get('/client/deltail-post/{id}',[ClientArchive::class,'detailsPost'])->name('details_Product');
//Chi tiet loai san pham
Route::get('/client/deltail-category-product/{id}',[ClientArchive::class,'categoryProduct'])->name('details_Product3');
//chi tiet san pham
Route::get('/client/deltail-product/{id}',[ClientArchive::class,'detailsProduct'])->name('details_Product2');
//Gio hang
Route::get('/cart',[CartController::class,'Cart'])->name('cart');
Route::get('/cart-count',[CartController::class,'countCart'])->name('cart_count');
Route::post('/cart/add/{product_id}/{quantity}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'updateCartItem'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');
//Gui mail
Route::post('/mail',[CartController::class,'getMail'])->name('mail');
//Checkout
Route::get('/list-user', [UserController::class, 'listUser'])->name('listUser');
/*
 * -----------------------------------Route giao diện admin-------------------------------------------------
 */

Route::middleware(['AdminMiddleware'])->prefix('/admin')->group(function (){

    Route::get('/', [DashboardController::class, 'admin'])->name('admin');

//Post
    Route::get('/add-category', [CategoryPostController::class, 'addCategory'])->name('addCategory');
    Route::post('/add-category', [CategoryPostController::class, 'storeCategory'])->name('storeCategory');
    Route::get('/list-category', [CategoryPostController::class, 'newPost'])->name('ListNewPost');
//Sua danh muc
    Route::get('/edit-category/{id}', [CategoryPostController::class, 'editCategory'])->name('edit_category');
    Route::post('/edit-category/{id}', [CategoryPostController::class, 'updateCategory'])->name('update_category');
//xoa bai viet
    Route::post('/delete/{id}', [CategoryPostController::class, 'deleteCategory'])->name('delete_category');

    Route::get('/add-post', [PostController::class, 'addPost'])->name('add_post');
    Route::post('/add-post', [PostController::class, 'addPostStore'])->name('add_post_store');
//Danh sach bai viet
    Route::get('/list-posts', [PostController::class, 'listPost'])->name('listPost');
//Sua bai viet
    Route::get('/edit-post/{id}', [PostController::class, 'editPosts'])->name('edit_post');
    Route::post('/edit-post/{id}', [PostController::class, 'updatePosts'])->name('update_post');
//xoa bai viet
    Route::post('/delete-post/{id}', [PostController::class, 'deletePost'])->name('delete_Post');
//chi tiet loai tin
    Route::get('/deltail-typepost/{id}',[ArchiveController::class,'deltailtype'])->name('Deltailtype');
//Chi tiet tin
    Route::get('/deltailNews/{id}',[ArchiveController::class,'deltailNews'])->name('DeltailNew');

//add product
    Route::get('/add-category-product', [CategoryProductController::class, 'addCategoryProduct'])->name('addCategoryProduct');
    Route::post('/add-category-product', [CategoryProductController::class, 'storeCategoryProduct'])->name('storeCategoryProduct');
//Danh sach loai san pham
    Route::get('/list-category-product', [CategoryProductController::class, 'listCategoryProduct'])->name('listCategoryProduct');
//Sua loai san pham
    Route::get('/edit-category-product/{id}', [CategoryProductController::class, 'editCategoryProduct'])->name('edit_category_product');
    Route::post('/edit-category-product/{id}', [CategoryProductController::class, 'updateCategoryProduct'])->name('update_category_product');
//xoa mục sản phẩm
    Route::post('/delete-category-product/{id}', [CategoryProductController::class, 'deleteCategoryProduct'])->name('delete_category_product');

//add san pham
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add_product');
    Route::post('/add-product', [ProductController::class, 'addProductStore'])->name('add_product_store');
//Danh sach san pham
    Route::get('/list-product', [ProductController::class, 'listProduct'])->name('listProduct');
//Sua bai viet
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit_product');
    Route::post('/edit-product/{id}', [ProductController::class, 'updateProduct'])->name('update_product');
//xoa sản phẩm
    Route::post('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete_product');
//chi tiet loai san pham
    Route::get('/deltail-category-product/{id}',[ArchiveController::class,'categoryProduct'])->name('deltail_Category_Product');
//Chi san pham
    Route::get('/deltail-product/{id}',[ArchiveController::class,'deltailProduct'])->name('details_product');


    //update user
    Route::get('/profile-information',[EditRouteUser::class,'profileInformation'])->name('profile_Information');
});
