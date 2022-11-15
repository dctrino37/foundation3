<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers path  
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\admin\generalController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


/*
    |--------------------------------------------------------------------------
    | Profile  
    |--------------------------------------------------------------------------
    */


Route::group(['middleware' => ['access_control','auth','admin']], function () {
Route::get('/my-profile', [generalController::class, 'myProfile'])->name('myProfile');
Route::post('/my-profile/update', [generalController::class, 'updateProfile'])->name('updateProfile');


/*
    |--------------------------------------------------------------------------
    | Dashboard  
    |--------------------------------------------------------------------------
    */

Route::get('admin/dashboard', [generalController::class, 'dash_index'])->middleware(['auth'])->name('dashboard');

/*
    |--------------------------------------------------------------------------
    | Products  
    |--------------------------------------------------------------------------
    */
Route::get('admin/users', [generalController::class, 'users'])->middleware(['auth'])->name('users');
Route::get('admin/users/send-mail', [generalController::class, 'sendMail'])->name('sendMail');
Route::post('admin/users/send-mail', [generalController::class, 'sendMailPost'])->name('sendMailPost');
Route::post('admin/users/allImages', [generalController::class, 'allImages'])->name('allImages');

Route::get('admin/delete-users', [generalController::class, 'delete_users'])->middleware(['auth'])->name('delete_users');
Route::post('admin/delete-users-post/{delete_ids?}', [generalController::class, 'delete_users_post'])->middleware(['auth'])->name('delete_users_post');




Route::get('admin/send-emails', [generalController::class, 'send_emails'])->middleware(['auth'])->name('send_emails');
Route::post('admin/send-emails/{email_ids?}', [generalController::class, 'send_emails_post'])->middleware(['auth'])->name('send_emails_post');


Route::get('admin/admin-seo', [generalController::class, 'admin_seo'])->middleware(['auth'])->name('admin_seo');
Route::post('admin/store-seo/{seo_id}', [generalController::class, 'store_seo'])->middleware(['auth'])->name('store_seo');

});


// Route::get('/product/add', [generalController::class, 'addProduct'])->name('addProduct');
// Route::post('/product/store', [generalController::class, 'storeProduct'])->name('storeProduct');
// Route::get('/product/edit/{product_id}', [generalController::class, 'editProduct'])->name('editProduct');
// Route::post('/product/update/{product_id}', [generalController::class, 'updateProduct'])->name('updateProduct');
// Route::get('/product/delete/{product_id}', [generalController::class, 'deleteProduct'])->name('deleteProduct');

