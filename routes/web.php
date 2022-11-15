<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\admin\generalController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


Route::group(['middleware' => 'access_control'], function () {
Route::get('/logout', [authController::class, 'logout']);
Route::get('admin/login', [authController::class, 'login'])->name('admin_login');
Route::post('/loginpost', [authController::class, 'loginpost']);

Route::get('/', [frontController::class, 'home'])->middleware(['access_control']);
Route::get('/social-programs', [frontController::class, 'socialPrograms']);
Route::get('/contact', [frontController::class, 'contact']);
Route::post('/contact', [frontController::class, 'contactPost']);
Route::get('/set-language/{language_id}', [frontController::class, 'set_language']);
Route::post('users/report-user/{report_user_id}', [generalController::class, 'report_user'])->middleware(['auth'])->name('report_user');
Route::get('/users/image-upload', [generalController::class, 'image_upload'])->name('image_upload')->middleware(['auth']);
Route::post('/users/store-image/{user_id}', [generalController::class, 'store_image'])->name('store_image')->middleware(['auth']);

});